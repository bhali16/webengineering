function Quiz(questions) {
    this.score = 0;
    this.questions = question;
    this.questionIndex = 0;
}

Quiz.prototype.getQuestionsIndex = function() {
    return this.questions(this.questionIndex);
}

Quiz.prototype.isEnded = function() {
    return this.questions.length === this.questionIndex;
}

Quiz.prototype.guess - function(answer) {
    this.questionIndex++;

    if(this.questionIndex().correctAnswer)
}