<?php

namespace Apitte\Core\Schema;

interface SchemaMapping
{

	const HANDLER = 'handler';
	const HANDLER_CLASS = 'class';
	const HANDLER_METHOD = 'method';
	const HANDLER_ARGUMENTS = 'arguments';

	const ROOT_PATH = 'rootPath';
	const PATH = 'path';
	const METHODS = 'method';
	const MASK = 'mask';
	const PATTERN = 'pattern';

	const PARAMETERS = 'parameters';
	const PARAMETERS_NAME = 'name';
	const PARAMETERS_TYPE = 'type';
	const PARAMETERS_PATTERN = 'pattern';
	const PARAMETERS_DESCRIPTION = 'pattern';

}
