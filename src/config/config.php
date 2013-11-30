<?php

/**
 * This file is part of Laravel HTMLMin by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    Laravel-HTMLMin
 * @author     Graham Campbell
 * @license    Apache License
 * @copyright  Copyright 2013 Graham Campbell
 * @link       https://github.com/GrahamCampbell/Laravel-HTMLMin
 */

return array(

    /*
    |--------------------------------------------------------------------------
    | Enable Live Optimizations
    |--------------------------------------------------------------------------
    |
    | This option enables minification of the html responses just before they
    | are served. These optimizations have a small impact on php processing
    | time as the optimizations are applied on every request. Note that even
    | with this disabled, some other non-live minification optimisations are
    | still applied.
    |
    | Default: true
    |
    */

    'enable' => true,

);
