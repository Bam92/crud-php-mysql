<?php
require_once "../model/model.php";

$tasks = get_all_tasks();

require "../views/reports.php";