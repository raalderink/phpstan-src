<?php declare(strict_types = 1);

namespace PHPStan\Reflection;

interface AdditionalConstructorsExtension
{

	public const EXTENSION_TAG = 'phpstan.additionalConstructorsExtension';

	/** @return string[] */
	public function getAdditionalConstructors(ClassReflection $classReflection): array;

}
