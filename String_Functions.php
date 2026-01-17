<?php include("includes/header1.php"); ?>

<div class="shape"></div>

<?php
$caseString = "HOLY ANGEL UNIVERSITY";
$nameString = "Maria Santos";
$sampleText = "  Learning PHP is fun!  ";
?>

<div class="section-title">Changing the Case of Characters</div>
<table>
<tr>
    <th>Function</th>
    <th>Result</th>
</tr>
<tr>
    <td>Lowercase</td>
    <td><?php echo strtolower($caseString); ?></td>
</tr>
<tr>
    <td>Uppercase</td>
    <td><?php echo strtoupper($caseString); ?></td>
</tr>
<tr>
    <td>Capitalize</td>
    <td><?php echo ucwords(strtolower($caseString)); ?></td>
</tr>
</table>

<div class="section-title">Counting Characters and Words</div>
<table>
<tr>
    <th>Function</th>
    <th>Result</th>
</tr>
<tr>
    <td>Number of Characters</td>
    <td><?php echo strlen($nameString); ?></td>
</tr>
<tr>
    <td>Number of Words</td>
    <td><?php echo str_word_count($nameString); ?></td>
</tr>
</table>

<div class="section-title">Removing and Replacing Characters</div>
<table>
<tr>
    <th>Function</th>
    <th>Result</th>
</tr>
<tr>
    <td>Remove whitespaces from left</td>
    <td>[<?php echo ltrim($sampleText); ?>]</td>
</tr>
<tr>
    <td>Remove whitespaces from right</td>
    <td>[<?php echo rtrim($sampleText); ?>]</td>

</tr>
<tr>
    <td>Remove whitespaces from both</td>
    <td>[<?php echo trim($sampleText); ?>]</td>
</tr>
<tr>
    <td>String replace</td>
    <td><?php echo str_replace("PHP", "Programming", $sampleText); ?></td>
</tr>
<tr>
    <td>String ireplace</td>
    <td><?php echo str_ireplace("php", "Coding", $sampleText); ?></td>
</tr>
<tr>
    <td>String repeat</td>
    <td><?php echo str_repeat("Hello ", 3); ?></td>
</tr>
</table>

<div class="section-title">Other Useful Built-in Functions</div>
<table>
<tr>
    <th>Function</th>
    <th>Result</th>
</tr>
<tr>
    <td>Substring</td>
    <td><?php echo substr("Programming", 0, 6); ?></td>
</tr>
<tr>
    <td>String Length Without Spaces</td>
    <td><?php echo strlen(str_replace(" ", "", $sampleText)); ?></td>
</tr>
<tr>
    <td>Find Position</td>
    <td><?php echo strpos("I love PHP", "PHP"); ?></td>
</tr>
<tr>
    <td>Reverse String</td>
    <td><?php echo strrev("Developer"); ?></td>
</tr>
<tr>
    <td>Convert to HTML Entities</td>
    <td><?php echo htmlentities("<b>PHP</b>"); ?></td>
</tr>
<tr>
    <td>Shuffle String</td>
    <td><?php echo str_shuffle("abcdef"); ?></td>
</tr>
<tr>
    <td>Compare Strings</td>
    <td><?php echo strcmp("apple", "banana"); ?></td>
</tr>
<tr>
    <td>First Character Uppercase</td>
    <td><?php echo ucfirst("student"); ?></td>
</tr>
<tr>
    <td>Chunk Split</td>
    <td><?php echo chunk_split("HELLOWORLD", 2, "-"); ?></td>
</tr>
</table>

<?php include("includes/footer1.php"); ?>
