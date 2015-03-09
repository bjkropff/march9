<?php

class TitleCaseGenerator
{
    function makeTitleCase($input_title)
    {
        $input_title = strtolower($input_title);
        $input_array_of_words = explode(" ", $input_title);
        $exclude = array("a", "an", "the", "but", "or", "of", "on", "in", "with", "upon", "for", "to");
        $output_titlecased = array();

        $first_word = $input_array_of_words[0];
        $last_word = end($input_array_of_words);


        array_push($output_titlecased, ucfirst($first_word));
        array_shift($input_array_of_words);

        foreach ($input_array_of_words as $word) {
            if(in_array($word, $exclude)) {
                array_push($output_titlecased, $word);
            } else {
            array_push($output_titlecased, ucfirst($word));
        }}

        array_pop($output_titlecased);
        array_push($output_titlecased, ucfirst($last_word));
        return implode(" ", $output_titlecased);
    }
}
?>
