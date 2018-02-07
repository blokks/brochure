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

        window.on('load', event => {
        	if(event.timeStamp < 2500) {
				const path = url.parse(window.location.href).path;
				controller.scrollIntoView(path);
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

	window.history.replaceState(null, document.title, path);
	controller.setCurrentView(path, animate);

	currentPath = path;
};

export default router;
