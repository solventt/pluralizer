<?php

declare(strict_types=1);

namespace Solventt;

use InvalidArgumentException;

class Pluralizer
{
    /**
     * Converts a noun from singular to plural
     * One of the grammar rules sources - https://en.wikipedia.org/wiki/English_plurals
     * @param string $word
     * @return string
     * @throws InvalidArgumentException
     */
    public static function convert(string $word): string
    {
        if (preg_match('/[\s-]/', $word)) {
            throw new InvalidArgumentException('The string must not contain whitespaces/dashes');
        }

        $word = strtolower($word);

        if (isset(array_flip(ConstantsBox::UNCOUNTABLE_NOUNS)[$word])) {
            return $word;
        }

        if (isset(ConstantsBox::EXCEPTIONS[$word])) {
            return ConstantsBox::EXCEPTIONS[$word];
        }

        if (isset(array_flip(ConstantsBox::IDENTICAL_FORMS)[$word])) {
            return $word;
        }

        // ends in -is: change to 'es'
        if (preg_match('/is$/', $word)) {
            $ending = $word === 'acropolis' ? 'eis' : 'es';

            return substr($word, 0, -2) . $ending;
        }

        // ends in -s, -ss, -x, -z, -sh, -ch: add 'es'
        if (preg_match('/(?:s|ss|x|z|sh|ch)$/', $word, $matches)) {
            if (in_array($word, ['gas', 'quiz', 'fez'])) {
                return $word . $matches[0] . 'es';
            }

            return $word . 'es';
        }

        // ends in -y after a consonant: change to 'ies'
        $regex = '/(?:[' . implode('', ConstantsBox::CONSONANTS) . ']y)$/';

        if (preg_match($regex, $word)) {
            return substr($word, 0, -1) . 'ies';
        }

        // ends in -o: add 'es'
        // rest of the words ended in -o admit either -s or both endings (-s/-es)
        // there are links to wiktionary.org on https://www.wordexample.com/list/nouns-ending-o
        if (in_array($word, ['tomato', 'potato', 'hero'])) {
            return $word . 'es';
        }

        // ends in -fe, -f: change to 'ves'
        if (preg_match('/(?:fe|(?<!f)f)$/', $word, $matches)) {
            if (!in_array($word, ['roof', 'proof', 'chief', 'chef', 'safe', 'gulf', 'reef', 'belief', 'handkerchief'])) {
                return substr($word, 0, -strlen($matches[0])) . 'ves';
            }
        }

        return $word . 's';
    }
}