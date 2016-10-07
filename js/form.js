class Form {
	constructor(element) {
		this.form = element;
		this.statesContainer = element.querySelector('.form__states');
		this.states = [].slice.call(element.querySelectorAll('.form__state'));
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

let form = new Form($('.form'));
