<?php


namespace Absmoca;


class Attribute
{

	/**
	 * @var string
	 */
	private $key;

	/**
	 * @var string
	 */
	private $value;

	/**
	 * @var string|null
	 */
	private $keyLabel;

	/**
	 * @var string
	 */
	private $valueLabel;

	/**
	 * @var boolean
	 */
	private $generic;

	/**
	 * @return string
	 */
	public function getKey(): string
	{
		return $this->key;
	}

	/**
	 * @param string $key
	 */
	public function setKey(string $key): void
	{
		$this->key = $key;
	}

	/**
	 * @return string
	 */
	public function getValue(): string
	{
		return $this->value;
	}

	/**
	 * @param string $value
	 */
	public function setValue(string $value): void
	{
		$this->value = $value;
	}

	/**
	 * @return string|null
	 */
	public function getKeyLabel(): ?string
	{
		return $this->keyLabel;
	}

	/**
	 * @param string|null $keyLabel
	 */
	public function setKeyLabel(?string $keyLabel): void
	{
		$this->keyLabel = $keyLabel;
	}

	/**
	 * @return string
	 */
	public function getValueLabel(): string
	{
		return $this->valueLabel;
	}

	/**
	 * @param string $valueLabel
	 */
	public function setValueLabel(string $valueLabel): void
	{
		$this->valueLabel = $valueLabel;
	}

	/**
	 * @return bool
	 */
	public function isGeneric(): bool
	{
		return $this->generic;
	}

	/**
	 * @param bool $generic
	 */
	public function setGeneric(bool $generic): void
	{
		$this->generic = $generic;
	}
}