<?php
/**
 * class.deleteCases.pmFunctions.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.
 * *
 */

////////////////////////////////////////////////////
// deleteCases PM Functions
//
// Copyright (C) 2007 COLOSA
//
// License: LGPL, see LICENSE
////////////////////////////////////////////////////

function deleteCases_getMyCurrentDate()
{
	return G::CurDate('Y-m-d');
}

function deleteCases_getMyCurrentTime()
{
	return G::CurDate('H:i:s');
}
