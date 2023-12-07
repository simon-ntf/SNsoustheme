<?php
/***************************************************************************\
 *  SN Suite, suite de plugins pour SPIP                                   *
 *  Copyright © depuis 2014                                                *
 *  Simon Nataf                                                            *
 *                                                                         *
 *  SPIP, Système de publication pour l'internet                           *
 *  Arnaud Martin, Antoine Pitrou, Philippe Rivière, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribué sous licence GNU/GPL.     *
 *  Pour plus de détails voir l'aide en ligne.                             *
\**************************************************************************/

if (!defined('_ECRIRE_INC_VERSION')) { return; }

function snsoustheme_upgrade($nom_meta_base_version, $version_cible){
	$maj = array();
	/* Tempo SN/JB prod a suppr */
	$maj['create'] = [
		['sql_alter', "table spip_articles DROP sn_aside_position"],
		['sql_alter', "table spip_rubriques DROP sn_aside_position"],
	];
	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}
function snsoustheme_vider_tables($nom_meta_base_version) {
	effacer_meta($nom_meta_base_version);
}
