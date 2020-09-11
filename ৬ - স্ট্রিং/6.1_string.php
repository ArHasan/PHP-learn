<?php
$name = "Hasan";
$string_1 = "my name is $name\n \t iam software developer";
echo $string_1;

$heredoc = <<<EOD
\n YOU MORE LINE ADD AS YOU WISH
Ashrafur Rahman $name (ArH)
EOD;
echo $heredoc;
echo PHP_EOL;
$nowdoc = <<<'EOD'
\n This is a nowdoc
$name;
EOD;
echo $nowdoc;