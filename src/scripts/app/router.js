import $ from 'queryselector.js';
import HowItWorksView from 'app/views/how-it-works.view';

class Router {
	registeredViews = new Map();

	initialize() {
		if (window.IntersectionObserver) {
			const intersectionHandler = entries => {
				entries.forEach(entry => {
					const view = this.registeredViews.get(entry.target);
					if (entry.intersectionRatio > 0.5) {
						view.activate();
					} else {
						view.deactivate();
					}
				});
			};

			const props = { root: null, rootMargin: '0px', threshold: 0.5 };
			this.intersectionObserver = new IntersectionObserver(
				intersectionHandler,
				props,
			);
		}

		this.addSubviews();
	}

	addSubviews() {
		const map = {
			'how-it-works': HowItWorksView,
		};

		const views = $('.how-it-works');
		views.forEach(view => {
			const className = view.classList[0];
			const View = map[className];

			const view1 = new View(view);
			this.registerView(view1);
		});
	}

	registerView = view => {
		if (this.intersectionObserver && !this.registeredViews.has(view.el)) {
			this.intersectionObserver.observe(view.el);
			this.registeredViews.set(view.el, view);
		} else if (!this.intersectionObserver) {
			view.activate();
		}
	};

	unregisterView = activity => {
		if (this.intersectionObserver && this.registeredViews.has(activity.el)) {
			this.intersectionObserver.unobserve(activity.el);
			this.registeredViews.delete(activity.el);
		}
	};
}

export default new Router();
