<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        //1. input a one-word title
        //2. returns the title capitalized
        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        //Take words and capitalize the first letter
        //1. input multiple word title
        //2. each word should be capitalized
        function test_makeTitleCase_multipleWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Little Mermaid", $result);
        }

        //check all words in array
        //if the word is not a principal word, it should not be capitalized
        function test_makeTitleCase_exclusions()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "lord of the rings";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Lord of the Rings", $result);
        }

        //check all words in array
        //make sure the first word is always capitalized, regardless of exclusions

        function test_makeTitleCase_firstWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the jungle book";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Jungle Book", $result);
        }

        //check all words in array
        //make sure the last word is always capitalized, regardless of exclusions

        function test_makeTitleCase_lastWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "hop on pop on";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Hop on Pop On", $result);
        }

        //check all words in array
        //make sure all words follow standard title case rules (no random letters capitalized in the middle of words)

        function test_makeTitleCase_standardCaps()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "tAnK gIrL";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Tank Girl", $result);
        }


    }
?>
