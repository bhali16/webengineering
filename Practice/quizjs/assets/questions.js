
function Questions(text, choice, answer) {
    this.text = text;
    this.choice = choice;
    this.answer = answer;
}

Questions.prototype.correctAnswer = function(choice){
    return choice = this.answer;
}

