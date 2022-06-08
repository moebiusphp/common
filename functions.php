<?php
if (!defined("MOEBIUS_DEBUG")) {
    define("MOEBIUS_DEBUG", !!(getenv("MOEBIUS_DEBUG") || ($_SERVER["MOEBIUS_DEBUG"] ?? false) || ($_ENV["MOEBIUS_DEBUG"] ?? false)));
}

