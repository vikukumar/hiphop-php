<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

function f(): (int, int) {
  if (true) {
    $x = 0;
    $y = 1;
  } else {
    $x = $y = 1;
  }

  return tuple($x, $y);
}