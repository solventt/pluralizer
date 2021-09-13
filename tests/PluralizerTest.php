<?php

use PHPUnit\Framework\TestCase;
use Solventt\Pluralizer;

class PluralizerTest extends TestCase
{
    private Pluralizer $pluralizer;

    protected function setUp(): void
    {
        $this->pluralizer = new Pluralizer();
    }

    public function getWrongNounNames(): array
    {
        return [
            'whitespace' => ['head banger'],
            'dash' => ['son-in-law'],
        ];
    }

    /**
     * @dataProvider getWrongNounNames
     */
    public function testNounContainsWhitespacesAndDashes(string $noun)
    {
        $this->expectExceptionMessage('The string must not contain whitespaces/dashes');

        $this->pluralizer->convert($noun);
    }

    public function testUppercaseConvertsIntoLowerCase()
    {
        self::assertSame('dogs', $this->pluralizer->convert('DOG'));
    }

    public function getUncountableNouns(): array
    {
        return [
            ['access'],
            ['garbage'],
            ['understanding'],
        ];
    }

    /**
     * @dataProvider getUncountableNouns
     */
    public function testUncountableNouns(string $noun)
    {
        self::assertSame($noun, $this->pluralizer->convert($noun));
    }

    public function getExceptions(): array
    {
        return [
            ['man', 'men'],
            ['mouse', 'mice'],
            ['ox','oxen']
        ];
    }

    /**
     * @dataProvider getExceptions
     */
    public function testExceptions(string $noun, string $result)
    {
        self::assertSame($result, $this->pluralizer->convert($noun));
    }

    public function getIdenticalForms(): array
    {
        return [
            ['sheep'],
            ['swine'],
            ['grouse'],
        ];
    }

    /**
     * @dataProvider getIdenticalForms
     */
    public function testIdenticalForms(string $noun)
    {
        self::assertSame($noun, $this->pluralizer->convert($noun));
    }

    public function getHissingSoundNouns(): array
    {
        return [
            ['bass', 'basses'],
            ['match', 'matches'],
            ['leash','leashes'],
            ['box','boxes'],
            ['bus','buses'],
            ['quiz','quizzes'],
        ];
    }

    /**
     * @dataProvider getHissingSoundNouns
     */
    public function testHissingSounds(string $noun, string $result)
    {
        self::assertSame($result, $this->pluralizer->convert($noun));
    }

    public function testEndsInYAfterConsonant()
    {
        self::assertSame('cherries', $this->pluralizer->convert('cherry'));
    }

    public function getNounsEndingInO(): array
    {
        return [
            ['tomato', 'tomatoes'],
            ['potato', 'potatoes'],
            ['hero','heroes'],
            ['kangaroo','kangaroos'],
            ['studio','studios'],
        ];
    }

    /**
     * @dataProvider getNounsEndingInO
     */
    public function testEndsInO(string $noun, string $result)
    {
        self::assertEquals($result, $this->pluralizer->convert($noun));
    }

    public function getNounsEndingInFeOrF(): array
    {
        return [
            ['knife', 'knives'],
            ['wife', 'wives'],
            ['roof','roofs'],
            ['reef','reefs'],
        ];
    }

    /**
     * @dataProvider getNounsEndingInFeOrF
     */
    public function testEndsInFeOrF(string $noun, string $result)
    {
        self::assertEquals($result, $this->pluralizer->convert($noun));
    }

    public function getNounsEndingInIs(): array
    {
        return [
            ['axis', 'axes'],
            ['parenthesis', 'parentheses'],
            ['genesis','geneses'],
            ['acropolis','acropoleis'],
        ];
    }

    /**
     * @dataProvider getNounsEndingInIs
     */
    public function testEndsInIs(string $noun, string $result)
    {
        self::assertEquals($result, $this->pluralizer->convert($noun));
    }
}