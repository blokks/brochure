import $ from 'queryselector.js';
import jump from 'jump.js';

import { navigateTo } from 'app/router';
import HowItWorksView from 'app/views/how-it-works.view';
import NavigationView from 'app/views/navigation.view';
import AbstractView from './views/abstract.view';

export default class {
	isJumping = false;
	currentPath = '/';
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
						const path = thisView.el.id !== 'header' ? `/${thisView.el.id}` : '/';
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
			let view;

			switch (element.id) {
				case 'how-it-works':
					view = new HowItWorksView(element);
					break;
				default:
					view = new AbstractView(element);
					break;
			}

			if (this.intersectionObserver) {
				this.intersectionObserver.observe(element);
			}

			return view;
		});
	}

	setCurrentView(path, animate = false) {

        if (path === this.currentPath) {
            return;
		}

		if (this.isJumping) {
            return;
		}

		this.currentPath = path;
		this.navigationView.setCurrentView(path);

		if (!animate) {
            return;
		}

        path = path !== '/' ? path : '/header';

		const selectedView = this.views.find(view => view.el.id === path.substr(1));
		const jumpOptions = {
			duration: 450,
			callback: () => (this.isJumping = false),
		};

		this.isJumping = true;
		jump(selectedView.el, jumpOptions);
	}
}
