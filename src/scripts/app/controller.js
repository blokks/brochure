import $ from 'queryselector.js';
import jump from 'jump.js';

import { navigateTo } from 'app/router';

import AbstractView from './views/abstract.view';
import HeaderView from 'app/views/header.view';
import HowItWorksView from 'app/views/how-it-works.view';
import NavigationView from 'app/views/navigation.view';
import ShowcaseView from 'app/views/showcase.view';

export default class {
	jumping = false;
	views = [];

	constructor() {
		this.initialize();
		this.observeElements();
		this.addSubviews();
	}

	initialize() {
		if (window.IntersectionObserver) {
			const handler = entries => {
				entries.forEach(entry => {
					if (entry.intersectionRatio >= 0.5) {
						const path = entry.target.getAttribute('data-path');
						navigateTo(path);
					}

					const thisView = this.views.find(view => view.el === entry.target);
					if (thisView) {
						if (entry.isIntersecting) {
							thisView.activate();
						}
						else {
							thisView.deactivate();
						}
					}
				});
			};

			const props = { root: null, rootMargin: '0px', threshold: [0, 0.5, 1.0] };
			this.intersectionObserver = new IntersectionObserver(handler, props);
		}
	}

	observeElements() {
		const elements = Array.from($('[data-path]'));
		elements.map(element => {
			if (this.intersectionObserver) {
				this.intersectionObserver.observe(element);
			}
		});		
	}

	addSubviews() {
		const navigation = $('#navigation');
		this.navigationView = new NavigationView(navigation);

		const elements = Array.from($('[data-view]'));
		this.views = elements.map(element => {
			if (this.intersectionObserver) {
				this.intersectionObserver.observe(element);
			}

			switch (element.getAttribute('data-view')) {
				case 'header':
					return new HeaderView(element);

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
		// path = path !== '/' ? path : '/header';

		const selectedView = this.views.find(view => view.el.getAttribute('data-path') === path);
		const jumpOptions = {
			duration: animate ? 600 : 0,
			callback: () => (this.jumping = false),
		};

		jump(selectedView.el, jumpOptions);
	}
}
