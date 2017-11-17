import $ from 'queryselector.js';
import jump from 'jump.js';

import { navigateTo } from 'app/router';

import AbstractView from './views/abstract.view';
import HowItWorksView from 'app/views/how-it-works.view';
import NavigationView from 'app/views/navigation.view';
import ShowcaseView from 'app/views/showcase.view';

export default class {
	jumping = false;
	views = [];

	constructor() {
		this.initialize();
		this.addSubviews();
	}

	initialize() {
		if (window.IntersectionObserver) {
			const handler = entries => {
				entries.forEach(entry => {
					const thisView = this.views.find(view => view.el === entry.target);
					if (entry.intersectionRatio >= 0.5) {
						const path =
							thisView.el.id !== 'header' ? `/${thisView.el.id}` : '/';
						navigateTo(path);
					}
				});
			};

			const props = { root: null, rootMargin: '0px', threshold: 0.5 };
			this.intersectionObserver = new IntersectionObserver(handler, props);
		}
	}

	addSubviews() {
		const navigation = $('#navigation');
		this.navigationView = new NavigationView(navigation);

		const elements = Array.from($('main > [data-view]'));
		this.views = elements.map(element => {
			if (this.intersectionObserver) {
				this.intersectionObserver.observe(element);
			}

			switch (element.id) {
				case 'how-it-works':
					return new HowItWorksView(element);

				case 'showcase':
					return new ShowcaseView(element);

				default:
					return new AbstractView(element);
			}
		});
	}

	setCurrentView(path, animate = false) {
		this.navigationView.setCurrentView(path);

		if (animate) {
			this.scrollIntoView(path, true);
		}
	}

	scrollIntoView(path, animate = true) {
		this.jumping = true;
		path = path !== '/' ? path : '/header';

		const selectedView = this.views.find(view => view.el.id === path.substr(1));
		const jumpOptions = {
			duration: animate ? 600 : 0,
			callback: () => (this.jumping = false),
		};

		jump(selectedView.el, jumpOptions);
	}
}
