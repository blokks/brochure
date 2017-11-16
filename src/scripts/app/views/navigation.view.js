import url from 'url';
import { navigateTo } from 'app/controller';
import AbstractView from 'app/views/abstract.view';

export default class extends AbstractView {
	currentView = null;
	updateId = 0;

	initialize(options) {
		super.initialize(options);
		this.links = this.$('a.navigation__link[href]');

		this.enable();
	}

	setCurrentView(path) {
		if (path === '/') {
			return;
		}

		if (this.currentView && this.currentView !== path) {
			const selectedLink = this.links.$(`a[href='${this.currentView}']`);
			selectedLink.classList.remove('navigation__link--active');
		}

		const selectedLink = this.links.$(`a[href='${path}']`);
		selectedLink.classList.add('navigation__link--active');

		this.currentView = path;
	}

	onLink(event) {
		const parsedURL = url.parse(event.currentTarget.href);
		const path = parsedURL.path !== 'header' ? parsedURL.path : '/';

		event.preventDefault();
		navigateTo(path, true);
	}

	enable() {
		if (!this.enabled) {
			super.enable();
			this.links.on('click', this.onLink.bind(this));
		}
	}
}
