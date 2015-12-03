<?php

namespace DB\Query;

use DB\GrammarInterface;

class Table implements FragmentInterface {

	protected $table;

	protected $grammar;

	public function __construct(GrammarInterface $grammar) {
		$this->grammar = $grammar;
	}

	public function name() {
		return $this->table;
	}

	public function from($table) {
		$this->table = $table;
	}

	public function getSqlString() {
		$table = $this->grammar->wrap($this->table);

		return sprintf('FROM %s', $table);
	}

}