<?php
//In this project, I wrote a function that can answer any “yes” or “no” question.
  function magic8Ball() {
    echo "\nWhat is your question? I accept only 'yes' or 'no' questions.\n";
    $question = readline("> ");

    echo "\nSo your question is... $question. Here is your answer: ";
    
    $magic = rand(0,19);

    switch ($magic) {
      case 0:
        echo "It is certain.";
        break;
      case 1:
        echo "It is decicedly so.";
        break;
      case 2:
        echo "Without a doubt.";
        break;
      case 3:
        echo "Yes - definitely.";
        break;
      case 4:
        echo "You may rely on it.";
        break;
      case 5:
        echo "As I see it, yes.";
        break;
      case 6:
        echo "Most likely.";
        break;
      case 7:
        echo "Outlook good.";
        break;
      case 8:
        echo "Yes.";
        break;
      case 9:
        echo "Signs point to yes.";
        break;
      case 10:
        echo "Reply hazy, try again.";
        break;
      case 11:
        echo "Ask again later.";
        break;
      case 12:
        echo "Better not tell you now.";
        break;
      case 13:
        echo "Cannot predict now.";
        break;
      case 14:
        echo "Concentrate and ask again.";
        break;
      case 15:
        echo "Don't count on it.";
        break;
      case 16:
        echo "My reply is no.";
        break;
      case 17:
        echo "My sources say no.";
        break;
      case 18:
        echo "Outlook not so good.";
        break;
      case 19:
        echo "Very doubtful.";
        break;
    }
  }

  magic8Ball();