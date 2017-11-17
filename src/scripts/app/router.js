import url from 'url';
import Controller from 'app/controller';

class Router {
	initialize() {
		this.links = window.$('a[href][data-link]');
		this.links.on('click', this.onLink.bind(this));

		if ('scrollRestoration' in window.history) {
			window.history.scrollRestoration = 'manual';
		}
	}

	onLink(event) {
		event.preventDefault();

		const parsedURL = url.parse(event.currentTarget.href);
		navigateTo(parsedURL.path, true);
	}
}

const router = new Router();
const controller = new Controller();

export const navigateTo = (path, animate = false) => {
	window.history.replaceState(null, document.title, path);
	controller.setCurrentView(path, animate);
};

export default router;
