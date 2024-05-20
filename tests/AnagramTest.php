<?php declare(strict_types=1);
use Tasks\AnagramChecker;
use PHPUnit\Framework\TestCase;

class AnagramTest extends TestCase
{
    public function testIsAnagram()
    {
        $anagramChecker = new AnagramChecker;

        $testCases = array(
            array("RAT", "CAR", false),
            array("MENTAL ASSET", "METAL ASSNET", true),
        );

        foreach ($testCases as $testCase) {
            $word1 = $testCase[0];
            $word2 = $testCase[1];
            $expectedResult = $testCase[2];

            $result = $anagramChecker->isAnagram($word1, $word2);

            $this->assertEquals($expectedResult, $result, "Test: '$word1' and '$word2'");
        }
    }
}
