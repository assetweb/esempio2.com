<?php
namespace Craft;

/**
 * Craft by Pixel & Tonic
 *
 * @package   Craft
 * @author    Pixel & Tonic, Inc.
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @link      http://buildwithcraft.com
 */

/**
 * Request functions
 */
class HttpRequestVariable
{
	/**
	 * Returns whether this is an Ajax request.
	 */
	public function isAjax()
	{
		return craft()->request->isAjaxRequest();
	}

	/**
	 * Returns whether this is a secure connection.
	 *
	 * @return bool
	 */
	public function isSecure()
	{
		return craft()->request->isSecureConnection();
	}

	/**
	 * Returns whether this is a Live Preview request.
	 *
	 * @return bool
	 */
	public function isLivePreview()
	{
		return craft()->request->isLivePreview();
	}

	/**
	 * Returns the script name used to access Craft.
	 *
	 * @return string
	 */
	public function getScriptName()
	{
		return craft()->request->getScriptName();
	}

	/**
	 * Returns the request's URI.
	 *
	 * @return mixed
	 */
	public function getPath()
	{
		return craft()->request->getPath();
	}

	/**
	 * Returns the request's full URL.
	 *
	 * @return mixed
	 */
	public function getUrl()
	{
		$uri = craft()->request->getPath();
		return UrlHelper::getUrl($uri);
	}

	/**
	 * Returns all URI segments.
	 *
	 * @return array
	 */
	public function getSegments()
	{
		return craft()->request->getSegments();
	}

	/**
	 * Returns a specific URI segment, or null if the segment doesn't exist.
	 *
	 * @param int $num
	 * @return string|null
	 */
	public function getSegment($num)
	{
		return craft()->request->getSegment($num);
	}

	/**
	 * Returns the first URI segment.
	 *
	 * @return string|null
	 */
	public function getFirstSegment()
	{
		return craft()->request->getSegment(1);
	}

	/**
	 * Returns the last URL segment.
	 *
	 * @return string|null
	 */
	public function getLastSegment()
	{
		return craft()->request->getSegment(-1);
	}

	/**
	 * Returns a variable from either the query string or the post data.
	 *
	 * @param string $name
	 * @param string $default
	 * @return mixed
	 */
	public function getParam($name, $default = null)
	{
		return craft()->request->getParam($name, $default);
	}

	/**
	 * Returns a variable from the query string.
	 *
	 * @param string|null $name
	 * @param string|null $default
	 * @return mixed
	 */
	public function getQuery($name = null, $default = null)
	{
		return craft()->request->getQuery($name, $default);
	}

	/**
	 * Returns a value from post data.
	 *
	 * @param string|null $name
	 * @param string|null $default
	 * @return mixed
	 */
	public function getPost($name = null, $default = null)
	{
		return craft()->request->getPost($name, $default);
	}

	/**
	 * Returns a \CHttpCookie if it exists, otherwise, null.
	 *
	 * @param $name
	 * @return \CHttpCookie|null
	 */
	public function getCookie($name)
	{
		return craft()->request->getCookie($name);
	}

	/**
	 * Returns the server name.
	 *
	 * @return string
	 */
	public function getServerName()
	{
		return craft()->request->getServerName();
	}

	/**
	 * Returns which URL format we're using (PATH_INFO or the query string)
	 *
	 * @return string
	 */
	public function getUrlFormat()
	{
		if (craft()->config->usePathInfo())
		{
			return 'pathinfo';
		}
		else
		{
			return 'querystring';
		}
	}

	/**
	 * Returns whether the request is coming from a mobile browser.
	 *
	 * @param bool $detectTablets
	 * @return bool
	 */
	public function isMobileBrowser($detectTablets = false)
	{
		return craft()->request->isMobileBrowser($detectTablets);
	}

	/**
	 * Returns the page number if this is a paginated request.
	 *
	 * @return int
	 */
	public function getPageNum()
	{
		return craft()->request->getPageNum();
	}

	/**
	 * Returns the schema and host part of the application URL.  The returned URL does not have an ending slash.
	 * By default this is determined based on the user request information.
	 *
	 * @param string $schema
	 * @return string
	 */
	public function getHostInfo($schema = '')
	{
		return craft()->request->getHostInfo($schema);
	}

	/**
	 * Returns the relative URL of the entry script.
	 *
	 * @return string
	 */
	public function getScriptUrl()
	{
		return craft()->request->getScriptUrl();
	}

	/**
	 * Returns the path info of the currently requested URL. This refers to the part that is after the entry script and before the question mark.
	 * The starting and ending slashes are stripped off.
	 *
	 * @return string
	 */
	public function getPathInfo()
	{
		return craft()->request->getPathInfo();
	}

	/**
	 * Returns the request URI portion for the currently requested URL.  This refers to the portion that is after the host info part.
	 * It includes the query string part if any.
	 *
	 * @return string
	 */
	public function getRequestUri()
	{
		return craft()->request->getRequestUri();
	}

	/**
	 * Returns the server port number.
	 *
	 * @return int
	 */
	public function getServerPort()
	{
		return craft()->request->getServerPort();
	}

	/**
	 * Returns the URL referrer or null if not present.
	 *
	 * @return string
	 */
	public function getUrlReferrer()
	{
		return craft()->request->getUrlReferrer();
	}

	/**
	 * Returns the user agent or null if not present.
	 *
	 * @return string
	 */
	public function getUserAgent()
	{
		return craft()->request->getUserAgent();
	}

	/**
	 * Returns the user IP address.
	 *
	 * @return string
	 */
	public function getUserHostAddress()
	{
		return craft()->request->getUserHostAddress();
	}

	/**
	 * Returns the user host name or null if it cannot be determined.
	 *
	 * @return string
	 */
	public function getUserHost()
	{
		return craft()->request->getUserHost();
	}

	/**
	 * Returns the port to use for insecure requests. Defaults to 80, or the port specified by the server if the current request is insecure.
	 *
	 * @return int
	 */
	public function getPort()
	{
		return craft()->request->getPort();
	}

}
