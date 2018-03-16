//declare global variables
var currentQuestion = 0;
var correctAnswers = 0;
var quizOver = false;


//For the DOM to handle event handling!
$(document).ready(function () {

    // Display the first question
    displayCurrentQuestion();
    $(this).find(".quizMessage").hide();

    // On clicking next, display the next question
    $(this).find(".nextButton").on("click", function () {
        if (!quizOver) {

            var value = $("input[type='radio']:checked").val();
            
            if (value === undefined){
                displaySelectAnswerAlert();
            } else {
                
                $(document).find(".quizMessage").hide();

                if (value == questions[currentQuestion].correctAnswer) {
                    correctAnswers++;
                }

                currentQuestion++;                                  // Since we have already displayed the first question on DOM ready
                
                if (currentQuestion < questions.length) {
                    if(currentQuestion == questions.length-1){
                        $(document).find(".nextButton").text("Submit");
                        displayCurrentQuestion();
                    } else {
                        displayCurrentQuestion();
                    }
                    
                    
                } else {
                    displayScore();
                                                                    //                    $(document).find(".nextButton").toggle();
                                                                    //                    $(document).find(".playAgainButton").toggle();
                                                                   // Change the text in the next button to ask if user wants to play again
                    $(document).find(".nextButton").text("Play Again ?");
                    quizOver = true;
                }
            }
        } else { //quiz is over and clicked the next button (which now displays 'Play Again?')
            quizOver = false;
            $(document).find(".nextButton").text("Next Question");
            resetQuiz();
            displayCurrentQuestion();
            hideScore();
        }
    });

});

// This displays the current question AND the choices
function displayCurrentQuestion() {

    console.log("In display current Question");

    var question = questions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices = questions[currentQuestion].choices.length;

    // Set the questionClass text to the current question
    $(questionClass).text(question);

    // Remove all current <label> elements (if any)
    $(choiceList).find("label").remove();

    var choice;
    for (var i = 0; i < numChoices; i++) {
        choice = questions[currentQuestion].choices[i];
        $('<label class="btn btn-lg btn-default btn-block"><input type="radio"  value=' + i + ' name="options" />' + choice + '</label>').appendTo(choiceList);
    }
}

//Resets Quiz 
function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}

function displaySelectAnswerAlert(){
    alert("Please select an answer");
}

//displays score once complete quiz
function displayScore() {
    alert("You scored " + correctAnswers + " out of " + questions.length);
    
}

//hides score until quiz is over
function hideScore() {
    $(document).find(".result").hide();
}



 
    
  
    
    
    
    
 
   
     
