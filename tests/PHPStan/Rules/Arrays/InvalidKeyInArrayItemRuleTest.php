<?php declare(strict_types = 1);

namespace PHPStan\Rules\Arrays;

use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<InvalidKeyInArrayItemRule>
 */
class InvalidKeyInArrayItemRuleTest extends RuleTestCase
{

	protected function getRule(): Rule
	{
		return new InvalidKeyInArrayItemRule(true);
	}

	public function testInvalidKey(): void
	{
		$this->analyse([__DIR__ . '/data/invalid-key-array-item.php'], [
			[
				'Invalid array key type DateTimeImmutable.',
				13,
			],
			[
				'Invalid array key type array.',
				14,
			],
			[
				'Possibly invalid array key type stdClass|string.',
				15,
			],
		]);
	}

	public function testInvalidKeyInList(): void
	{
		$this->analyse([__DIR__ . '/data/invalid-key-list.php'], [
			[
				'Invalid array key type DateTimeImmutable.',
				7,
			],
			[
				'Invalid array key type array.',
				8,
			],
		]);
	}

	public function testInvalidKeyShortArray(): void
	{
		$this->analyse([__DIR__ . '/data/invalid-key-short-array.php'], [
			[
				'Invalid array key type DateTimeImmutable.',
				7,
			],
			[
				'Invalid array key type array.',
				8,
			],
		]);
	}

}
