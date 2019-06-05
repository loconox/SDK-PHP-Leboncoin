<?php


namespace Absmoca;


class Image
{

	/**
	 * @var string
	 */
	private $thumb;

	/**
	 * @var string
	 */
	private $normal;

	/**
	 * @var string
	 */
	private $large;

	/**
	 * @return string
	 */
	public function getThumb(): string
	{
		return $this->thumb;
	}

	/**
	 * @param string $thumb
	 */
	public function setThumb(string $thumb): void
	{
		$this->thumb = $thumb;
	}

	/**
	 * @return string
	 */
	public function getNormal(): string
	{
		return $this->normal;
	}

	/**
	 * @param string $normal
	 */
	public function setNormal(string $normal): void
	{
		$this->normal = $normal;
	}

	/**
	 * @return string
	 */
	public function getLarge(): string
	{
		return $this->large;
	}

	/**
	 * @param string $large
	 */
	public function setLarge(string $large): void
	{
		$this->large = $large;
	}
}