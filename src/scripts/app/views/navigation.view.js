import AbstractView from 'app/views/abstract.view';

export default class extends AbstractView {
	currentView = null;
	updateId = 0;

	initialize(options) {
		super.initialize(options);
	}

	setCurrentView(viewId) {
		if (viewId !== this.currentView) {
			const selectedLink = this.$(`a[data-view-id='${this.currentView}']`);
			if (selectedLink) {
				selectedLink.classList.remove('navigation__link--active');
			}
		}

		if (viewId) {
			const selectedLink = this.$(`a[data-view-id='${viewId}']`);
			if (selectedLink) {
				selectedLink.classList.add('navigation__link--active');
			}
		}

		this.currentView = viewId;
	}
}
