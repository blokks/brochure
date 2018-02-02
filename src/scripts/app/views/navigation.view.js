import AbstractView from 'app/views/abstract.view';

export default class extends AbstractView {
	currentPath = null;

	setCurrentView(path) {
		console.log(path);
		
		if (this.currentPath && this.currentPath !== path) {
			const selectedLink = this.$(`a[href='${this.currentPath}']`);
			selectedLink.classList.remove('navigation__link--active');
		}


		if (path !== '/') {
			const selectedLink = this.$(`a[href='${path}']`);
			selectedLink.classList.add('navigation__link--active');
		}

		this.currentPath = path;
	}
}
