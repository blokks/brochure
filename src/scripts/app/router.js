import url from 'url';
import Controller from 'app/controller';

class Router {
	initialize() {
		if ('scrollRestoration' in window.history) {
			window.history.scrollRestoration = 'manual';
		}

		// this.controller = new Controller();
		// window.on('pushstate', this.onPushstate.bind(this));
	}

	onPushstate() {
		const parsedURL = url.parse(window.location.href);
		this.controller.setCurrentView(parsedURL.path);
	}
}

export const navigateTo = path => {
	window.history.replaceState(null, document.title, path);

	const pushStateEvent = new CustomEvent('pushstate');
	window.dispatchEvent(pushStateEvent);
};

export default new Router();
