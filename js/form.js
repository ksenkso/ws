class Form {
	constructor(element) {
		this.form = element;
		this.statesContainer = element.find('.form__states')[0];
		this.states = [].slice.call(element.find('.form__state'));
		this.currentState = 0;
	}

	nextState() {
		console.log(this.currentState);
		if (this.currentState != this.states.length - 1) {
			++this.currentState;
		}
		this.statesContainer.style.transform = `translateX(-${(this.currentState)*550}px)`;
	}

	prevState() {
		if (this.currentState <= 0) {
			return;
		}

		--this.currentState;

		console.log(this.currentState);
		this.statesContainer.style.transform = `translateX(-${(this.currentState)*550}px)`;	
	}

}

var form = new Form($('.form__container'));
