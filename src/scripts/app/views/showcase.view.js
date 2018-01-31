import AbstractView from 'app/views/abstract.view';

const SELECTED_SLIDE = 'showcase__slide--selected';
const SELECTED_BUTTON = 'showcase__slide-button--selected';

export default class extends AbstractView {
	initialize(options) {
		super.initialize(options);
		this.buttons = this.$('.showcase__slide-button');

		if (!window.IntersectionObserver) {
			this.enable();
		}
	}

	selectSlide(selectedClient) {
		const currentButton = this.$(`.${SELECTED_BUTTON}`);
		currentButton.classList.remove(SELECTED_BUTTON);

		const nextButton = this.$(`.showcase__slide-button[data-client='${selectedClient}']`);
		nextButton.classList.add(SELECTED_BUTTON);

		const currentSlide = this.$(`.${SELECTED_SLIDE}`);
		currentSlide.classList.remove(SELECTED_SLIDE);

		const nextSlide = this.$(`.showcase__slide[data-client='${selectedClient}']`);
		nextSlide.classList.add(SELECTED_SLIDE);
	}

	onButton(event) {
		console.log('clicl');
		const selectedClient = event.currentTarget.getAttribute('data-client');
		this.selectSlide(selectedClient);
	}

	enable() {
		if (!this.enabled) {
			super.enable();
			console.log('enable');
			this.buttons.on('click', this.onButton.bind(this));
		}
	}
}
