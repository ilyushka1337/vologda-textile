<?php
namespace Placestart\Core\Component;

use Placestart\Core\Utils;
use Placestart\Core\ViteAssets;

class Parameters
{
	private $groups = [];
	private $parameters = [
		"CACHE_TIME" => [
			"DEFAULT" => 3600000
		]
	];
	private static $iblocks = null;

	function __construct()
	{
	}

	private static function getIblocks()
	{
		if (!self::$iblocks) {
			self::$iblocks = Utils::getIblocksList();
		}
		return self::$iblocks;
	}

	private function createParam($param, $additional_props = [])
	{
		return array_merge($param, $additional_props);
	}

	private function createGroup($key, $name, $sort)
	{
		$this->groups[$key] = [
			'NAME' => $name,
			'SORT' => $sort
		];
	}

	/**
	 * Группирует параметры
	 * @param string $group_key ключ
	 * @param string $group_name отображаемое название
	 * @param int $group_sort порядок сортировки
	 * @param array $group_params ассоциативный массив с параметрами
	 * @return void
	 */
	public function group(string $group_key, string $group_name, int $group_sort, array $group_params)
	{
		$this->createGroup($group_key, $group_name, $group_sort);

		foreach ($group_params as $param_key => $param) {
			$param['PARENT'] = $group_key;
			$this->parameters[$param_key] = $param;
		}
	}

	public function string($name, $params = [])
	{
		return $this->createParam([
			"NAME" => $name,
			"TYPE" => "STRING"
		], $params);
	}

	public function iblock($name, $params = [])
	{
		$iblocks = self::getIblocks();

		return $this->createParam([
			'NAME' => $name,
			'TYPE' => 'LIST',
			'VALUES' => $iblocks['iblocks']
		], $params);
	}

	public function iblockType($name, $params = [])
	{
		$iblocks = self::getIblocks();

		return $this->createParam([
			'NAME' => $name,
			'TYPE' => 'LIST',
			'VALUES' => $iblocks['types']
		], $params);
	}

	public function list($name, $values, $params = [])
	{
		return $this->createParam([
			'NAME' => $name,
			'TYPE' => 'LIST',
			'VALUES' => $values
		], $params);
	}

	public function file($name, $ext = '', $use_medialib = false, $medialib_types = [], $params = [])
	{
		return $this->createParam([
			'NAME' => $name,
			'TYPE' => 'FILE',
			'FD_EXT' => $ext,
			"FD_TARGET" => "F",
			"FD_UPLOAD" => true,
			"FD_USE_MEDIALIB" => $use_medialib,
		], $params);
	}

	public function image($name, $params = [])
	{
		return $this->createParam([
			'NAME' => $name,
			'TYPE' => 'FILE',
			'FD_EXT' => ".png, .jpeg, .jpg",
			"FD_TARGET" => "F",
			"FD_UPLOAD" => true,
			"FD_USE_MEDIALIB" => true,
		], $params);
	}

	public function textInclude($name, $params = [])
	{
		return $this->file($name, 'html', false, [], $params);
	}

	public function create()
	{
		return [
			'GROUPS' => $this->groups,
			'PARAMETERS' => $this->parameters
		];
	}

	public function checkbox($name, $params = [])
	{
		return $this->createParam([
			'NAME' => $name,
			'TYPE' => 'CHECKBOX'
		], $params);
	}
}