<?php

class xmlController extends Basexmlcontroller{

	public function sitemapAction(){

		$Xml = 	'<?xml version="1.0" encoding="UTF-8"?>';
		$Xml .=	'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
		$Xml .= parent::sitemapAction();
		$Xml .= '</urlset>';

		header("Content-Type: application/xml");
        echo $Xml;
        exit;

	}

}