import AbstractView from 'app/views/abstract.view';

import featureA from 'app/animations/blokks-feature-A-svg.json';
import featureB from 'app/animations/blokks-feature-B-svg.json';
import featureC from 'app/animations/blokks-feature-C-svg.json';
import featureD from 'app/animations/blokks-feature-D-svg.json';

export default class extends AbstractView {
	initialize(options = {}) {
		super.initialize(options);

		this.container = this.$('#animationContainer');
		this.player = this.$('.feature__player');

		this.addAnimation();
	}

	addAnimation() {
		const animationType = this.el.getAttribute('data-animation');

		switch (animationType) {
			case 'featureA':
				this.animation = new SVGAnim(featureA, 640, 400, 31);
				break;

			case 'featureB':
				this.animation = new SVGAnim(featureB, 640, 400, 31);
				break;

			case 'featureC':
				this.animation = new SVGAnim(featureC, 640, 400, 31);
				break;

			case 'featureD':
				this.animation = new SVGAnim(featureD, 640, 400, 31);
				break;

			default:
				break;
		}

		this.animation.s.node.setAttribute('preserveAspectRatio', 'xMinYMin');
		this.animation.s.node.removeAttribute('width');
		this.animation.s.node.removeAttribute('height');

		this.container.removeChild(this.container.firstChild);
		this.container.appendChild(this.animation.s.node);
	}

	activate() {
		if (this.deactivated) {
			super.activate();
			this.animation.mc.play()
		}
	}

	deactivate() {
		if (this.activated) {
			super.deactivate();
			this.animation.mc.stop();
		}
	}
}
