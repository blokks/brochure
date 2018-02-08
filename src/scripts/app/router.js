import $ from 'queryselector.js';
import url from 'url';
import Controller from 'app/controller';

let currentPath = '/';

class Router {
	initialize() {
		this.links = window.$('a[href][data-link]');
		this.links.on('click', this.onLink.bind(this));

		if ('scrollRestoration' in window.history) {
			window.history.scrollRestoration = 'manual';
		}

		const urlInfo = url.parse(window.location.href);
        window.on('load', event => {
        	const difference = new Date().getTime() - startTime;
        	if (difference <= 3000) {
        		// Show notification when there is any
				const notification = document.getElementById('notification');
        		if (notification) {
					controller.showNotification();
        		}

        		// Otherwise jump to deeplink
	        	else if (urlInfo.pathname !== '/') {
					controller.scrollIntoView(urlInfo.pathname, false);
	        	}
        	}
        });
	}

	onLink(event) {
		event.preventDefault();

		const path = url.parse(event.currentTarget.href).path;
		navigateTo(path, true);
	}
}

const router = new Router();
const controller = new Controller();

export const navigateTo = (path, animate = false) => {
	if (path === currentPath) {
		return;
	}

	if (controller.jumping) {
		return;
	}

	const urlInfo = url.parse(window.location.href);

	window.history.replaceState(null, document.title, path);
	controller.setCurrentView(path, animate);

	currentPath = path;
};

export default router;
