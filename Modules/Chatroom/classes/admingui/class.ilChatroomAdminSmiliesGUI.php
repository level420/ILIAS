<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */

/**
 * Class ilChatroomSmiliesGUI
 * @author  Jan Posselt <jposselt@databay.de>
 * @version $Id$
 * @ingroup ModulesChatroom
 */
class ilChatroomAdminSmiliesGUI extends ilChatroomGUIHandler
{
	/**
	 * {@inheritdoc}
	 */
	public function executeDefault($method)
	{
		/**
		 * @var $tpl ilT
		 */
		global $tpl;

		$this->gui->switchToVisibleMode();
		$tpl->setVariable('ADM_CONTENT', '');
	}
}