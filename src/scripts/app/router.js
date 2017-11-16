import $ from 'queryselector.js';

import HowItWorksView from 'app/views/how-it-works.view';
import NavigationView from 'app/views/navigation.view';
import AbstractView from './views/abstract.view';

class Router {
	registeredViews = new Map();

	initialize() {
		this.initObserver();
		this.addSubviews();
	}

	initObserver() {
		if (window.IntersectionObserver) {
			const handler = entries => {
				entries.forEach(entry => {
					const view = this.registeredViews.get(entry.target);
					if (entry.intersectionRatio >= 0.5) {
						this.activateView(view);
					} else {
						this.deactivateView(view);
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

		$('main > [data-view]').forEach(view => {
			let ViewDefinition;
			switch (view.id) {
				case 'how-it-works':
					ViewDefinition = HowItWorksView;
					break;
				default:
					ViewDefinition = AbstractView;
					break;
			}

			if (this.intersectionObserver) {
				this.intersectionObserver.observe(view);
				this.registeredViews.set(view, new ViewDefinition(view));
			}
		});
	}

	activateView(view) {
		this.navigationView.setCurrentView(view.el.id);
		view.activate();
	}

	deactivateView(view) {
		view.deactivate();
	}
}

export default new Router();
