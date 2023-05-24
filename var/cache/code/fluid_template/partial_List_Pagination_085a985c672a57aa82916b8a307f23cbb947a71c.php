<?php

class partial_List_Pagination_085a985c672a57aa82916b8a307f23cbb947a71c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
    <ul class="f3-widget-paginator">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
$output38 = '';

$output38 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
$output41 = '';

$output41 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
$output44 = '';

$output44 .= '
                    <li class="first">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};
$arguments45 = [];
$arguments45['action'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['controller'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['pluginName'] = NULL;
$arguments45['pageUid'] = NULL;
$arguments45['pageType'] = 0;
$arguments45['noCache'] = NULL;
$arguments45['section'] = '';
$arguments45['format'] = '';
$arguments45['linkAccessRestrictedPages'] = false;
$arguments45['additionalParams'] = array (
);
$arguments45['absolute'] = false;
$arguments45['addQueryString'] = false;
$arguments45['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments45['addQueryStringMethod'] = NULL;
$arguments45['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array47 = [];
$array47['currentPage'] = 1;
$arguments45['arguments'] = $array47;
// Rendering Boolean node
// Rendering Array
$array48 = [];
$array48['0'] = 1;

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};
$arguments50 = [];
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'pagination.first';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output44 .= '">
                            <i class="material-icons">first_page</i>
                        </a>
                    </li>
                ';
return $output44;
};
$arguments42 = [];

$output41 .= '';

$output41 .= '
                <li class="previous">
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};
$arguments52 = [];
$arguments52['action'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['controller'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['pluginName'] = NULL;
$arguments52['pageUid'] = NULL;
$arguments52['pageType'] = 0;
$arguments52['noCache'] = NULL;
$arguments52['section'] = '';
$arguments52['format'] = '';
$arguments52['linkAccessRestrictedPages'] = false;
$arguments52['additionalParams'] = array (
);
$arguments52['absolute'] = false;
$arguments52['addQueryString'] = false;
$arguments52['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments52['addQueryStringMethod'] = NULL;
$arguments52['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array54 = [];
$array54['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber');
$arguments52['arguments'] = $array54;
// Rendering Boolean node
// Rendering Array
$array55 = [];
$array55['0'] = 1;

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments52['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output41 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};
$arguments57 = [];
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'pagination.previous';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output41 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};
$arguments59 = [];
$arguments59['key'] = NULL;
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['languageKey'] = NULL;
$arguments59['alternativeLanguageKeys'] = NULL;
$arguments59['key'] = 'widget.pagination.previous';
$arguments59['extensionName'] = 'fluid';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output41 .= '
                    </a>
                </li>
            ';
return $output41;
};
$arguments39 = [];

$output38 .= '';

$output38 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output63 = '';

$output63 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
$output66 = '';

$output66 .= '
                    <li class="disabled"><span><i class="material-icons">first_page</i></span></li>
                    <li class="disabled"><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};
$arguments67 = [];
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$arguments67['key'] = 'widget.pagination.previous';
$arguments67['extensionName'] = 'fluid';

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '</span></li>
                ';
return $output66;
};
$arguments64 = [];

$output63 .= '';

$output63 .= '
            ';
return $output63;
};
$arguments61 = [];
$arguments61['if'] = NULL;

$output38 .= '';

$output38 .= '
        ';
return $output38;
};
$arguments8 = [];
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = [];
$array36['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber');
$array36['1'] = ' && ';
$array36['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber');
$array36['3'] = ' >= ';
$array36['4'] = $renderingContext->getVariableProvider()->getByPath('pagination.firstPageNumber');

$expression37 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) >= TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])));};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                    <li class="first">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};
$arguments14 = [];
$arguments14['action'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['controller'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['pluginName'] = NULL;
$arguments14['pageUid'] = NULL;
$arguments14['pageType'] = 0;
$arguments14['noCache'] = NULL;
$arguments14['section'] = '';
$arguments14['format'] = '';
$arguments14['linkAccessRestrictedPages'] = false;
$arguments14['additionalParams'] = array (
);
$arguments14['absolute'] = false;
$arguments14['addQueryString'] = false;
$arguments14['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments14['addQueryStringMethod'] = NULL;
$arguments14['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array16 = [];
$array16['currentPage'] = 1;
$arguments14['arguments'] = $array16;
// Rendering Boolean node
// Rendering Array
$array17 = [];
$array17['0'] = 1;

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};
$arguments19 = [];
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'pagination.first';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <i class="material-icons">first_page</i>
                        </a>
                    </li>
                ';
return $output13;
};
$arguments11 = [];

$output10 .= '';

$output10 .= '
                <li class="previous">
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};
$arguments21 = [];
$arguments21['action'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['controller'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['pluginName'] = NULL;
$arguments21['pageUid'] = NULL;
$arguments21['pageType'] = 0;
$arguments21['noCache'] = NULL;
$arguments21['section'] = '';
$arguments21['format'] = '';
$arguments21['linkAccessRestrictedPages'] = false;
$arguments21['additionalParams'] = array (
);
$arguments21['absolute'] = false;
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['addQueryStringMethod'] = NULL;
$arguments21['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array23 = [];
$array23['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber');
$arguments21['arguments'] = $array23;
// Rendering Boolean node
// Rendering Array
$array24 = [];
$array24['0'] = 1;

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output10 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};
$arguments26 = [];
$arguments26['key'] = NULL;
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['languageKey'] = NULL;
$arguments26['alternativeLanguageKeys'] = NULL;
$arguments26['key'] = 'pagination.previous';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output10 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};
$arguments28 = [];
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$arguments28['key'] = 'widget.pagination.previous';
$arguments28['extensionName'] = 'fluid';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output10 .= '
                    </a>
                </li>
            ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
$output33 = '';

$output33 .= '
                    <li class="disabled"><span><i class="material-icons">first_page</i></span></li>
                    <li class="disabled"><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};
$arguments34 = [];
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['languageKey'] = NULL;
$arguments34['alternativeLanguageKeys'] = NULL;
$arguments34['key'] = 'widget.pagination.previous';
$arguments34['extensionName'] = 'fluid';

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '</span></li>
                ';
return $output33;
};
$arguments31 = [];

$output30 .= '';

$output30 .= '
            ';
return $output30;
};

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return '
            <li>…</li>
        ';
};
$arguments69 = [];
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = [];
$array71['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages');

$expression72 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output7 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
$output75 = '';

$output75 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
$output87 = '';

$output87 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
$output90 = '';

$output90 .= '
                    <li class="current">';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page')]);

$output90 .= '</li>
                ';
return $output90;
};
$arguments88 = [];

$output87 .= '';

$output87 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
$output93 = '';

$output93 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure95 = function() use ($renderingContext) {
return NULL;
};
$arguments94 = [];
$arguments94['action'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['controller'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['pluginName'] = NULL;
$arguments94['pageUid'] = NULL;
$arguments94['pageType'] = 0;
$arguments94['noCache'] = NULL;
$arguments94['section'] = '';
$arguments94['format'] = '';
$arguments94['linkAccessRestrictedPages'] = false;
$arguments94['additionalParams'] = array (
);
$arguments94['absolute'] = false;
$arguments94['addQueryString'] = false;
$arguments94['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments94['addQueryStringMethod'] = NULL;
$arguments94['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array96 = [];
$array96['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page');
$arguments94['arguments'] = $array96;
// Rendering Boolean node
// Rendering Array
$array97 = [];
$array97['0'] = 1;

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments94['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output93 .= '">';

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page')]);

$output93 .= '</a>
                    </li>
                ';
return $output93;
};
$arguments91 = [];
$arguments91['if'] = NULL;

$output87 .= '';

$output87 .= '
            ';
return $output87;
};
$arguments76 = [];
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = [];
$array85['0'] = $renderingContext->getVariableProvider()->getByPath('page');
$array85['1'] = ' == ';
$array85['2'] = $renderingContext->getVariableProvider()->getByPath('paginator.currentPageNumber');

$expression86 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = function() use ($renderingContext) {
$output78 = '';

$output78 .= '
                    <li class="current">';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page')]);

$output78 .= '</li>
                ';
return $output78;
};
$arguments76['__elseClosures'][] = function() use ($renderingContext) {
$output79 = '';

$output79 .= '
                    <li>
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return NULL;
};
$arguments80 = [];
$arguments80['action'] = NULL;
$arguments80['arguments'] = array (
);
$arguments80['controller'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['pluginName'] = NULL;
$arguments80['pageUid'] = NULL;
$arguments80['pageType'] = 0;
$arguments80['noCache'] = NULL;
$arguments80['section'] = '';
$arguments80['format'] = '';
$arguments80['linkAccessRestrictedPages'] = false;
$arguments80['additionalParams'] = array (
);
$arguments80['absolute'] = false;
$arguments80['addQueryString'] = false;
$arguments80['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments80['addQueryStringMethod'] = NULL;
$arguments80['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array82 = [];
$array82['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page');
$arguments80['arguments'] = $array82;
// Rendering Boolean node
// Rendering Array
$array83 = [];
$array83['0'] = 1;

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output79 .= '">';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page')]);

$output79 .= '</a>
                    </li>
                ';
return $output79;
};

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '

        ';
return $output75;
};
$arguments73 = [];
$arguments73['each'] = NULL;
$arguments73['as'] = NULL;
$arguments73['key'] = NULL;
$arguments73['reverse'] = false;
$arguments73['iteration'] = NULL;
$arguments73['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.allPageNumbers');
$arguments73['as'] = 'page';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output7 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return '
            <li>…</li>
        ';
};
$arguments99 = [];
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = [];
$array101['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages');

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = $renderChildrenClosure100;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output7 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
$output133 = '';

$output133 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure135 = function() use ($renderingContext) {
$output136 = '';

$output136 .= '
                <li class="next">
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return NULL;
};
$arguments137 = [];
$arguments137['action'] = NULL;
$arguments137['arguments'] = array (
);
$arguments137['controller'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['pluginName'] = NULL;
$arguments137['pageUid'] = NULL;
$arguments137['pageType'] = 0;
$arguments137['noCache'] = NULL;
$arguments137['section'] = '';
$arguments137['format'] = '';
$arguments137['linkAccessRestrictedPages'] = false;
$arguments137['additionalParams'] = array (
);
$arguments137['absolute'] = false;
$arguments137['addQueryString'] = false;
$arguments137['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments137['addQueryStringMethod'] = NULL;
$arguments137['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array139 = [];
$array139['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber');
$arguments137['arguments'] = $array139;
// Rendering Boolean node
// Rendering Array
$array140 = [];
$array140['0'] = 1;

$expression141 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments137['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array140)
					),
					$renderingContext
				);

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output136 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext) {
return NULL;
};
$arguments142 = [];
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['languageKey'] = NULL;
$arguments142['alternativeLanguageKeys'] = NULL;
$arguments142['key'] = 'pagination.next';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output136 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext) {
return NULL;
};
$arguments144 = [];
$arguments144['key'] = NULL;
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$arguments144['languageKey'] = NULL;
$arguments144['alternativeLanguageKeys'] = NULL;
$arguments144['key'] = 'widget.pagination.next';
$arguments144['extensionName'] = 'fluid';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output136 .= '
                    </a>
                </li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure147 = function() use ($renderingContext) {
$output148 = '';

$output148 .= '
                    <li class="last">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure150 = function() use ($renderingContext) {
return NULL;
};
$arguments149 = [];
$arguments149['action'] = NULL;
$arguments149['arguments'] = array (
);
$arguments149['controller'] = NULL;
$arguments149['extensionName'] = NULL;
$arguments149['pluginName'] = NULL;
$arguments149['pageUid'] = NULL;
$arguments149['pageType'] = 0;
$arguments149['noCache'] = NULL;
$arguments149['section'] = '';
$arguments149['format'] = '';
$arguments149['linkAccessRestrictedPages'] = false;
$arguments149['additionalParams'] = array (
);
$arguments149['absolute'] = false;
$arguments149['addQueryString'] = false;
$arguments149['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments149['addQueryStringMethod'] = NULL;
$arguments149['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array151 = [];
$array151['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber');
$arguments149['arguments'] = $array151;
// Rendering Boolean node
// Rendering Array
$array152 = [];
$array152['0'] = 1;

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext) {
return NULL;
};
$arguments154 = [];
$arguments154['key'] = NULL;
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['languageKey'] = NULL;
$arguments154['alternativeLanguageKeys'] = NULL;
$arguments154['key'] = 'pagination.last';

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output148 .= '">
                            last
                        </a>
                    </li>
                ';
return $output148;
};
$arguments146 = [];

$output136 .= '';

$output136 .= '
            ';
return $output136;
};
$arguments134 = [];

$output133 .= '';

$output133 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure157 = function() use ($renderingContext) {
$output158 = '';

$output158 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure160 = function() use ($renderingContext) {
$output161 = '';

$output161 .= '
                    <li class="disabled"><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure163 = function() use ($renderingContext) {
return NULL;
};
$arguments162 = [];
$arguments162['key'] = NULL;
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$arguments162['languageKey'] = NULL;
$arguments162['alternativeLanguageKeys'] = NULL;
$arguments162['key'] = 'widget.pagination.next';
$arguments162['extensionName'] = 'fluid';

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '</span></li>
                    <li class="disabled"><span>last page</span></li>
                ';
return $output161;
};
$arguments159 = [];

$output158 .= '';

$output158 .= '
            ';
return $output158;
};
$arguments156 = [];
$arguments156['if'] = NULL;

$output133 .= '';

$output133 .= '
        ';
return $output133;
};
$arguments103 = [];
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = [];
$array131['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber');
$array131['1'] = ' && ';
$array131['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber');
$array131['3'] = ' <= ';
$array131['4'] = $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber');

$expression132 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) <= TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])));};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = function() use ($renderingContext) {
$output105 = '';

$output105 .= '
                <li class="next">
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
return NULL;
};
$arguments106 = [];
$arguments106['action'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['controller'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['pluginName'] = NULL;
$arguments106['pageUid'] = NULL;
$arguments106['pageType'] = 0;
$arguments106['noCache'] = NULL;
$arguments106['section'] = '';
$arguments106['format'] = '';
$arguments106['linkAccessRestrictedPages'] = false;
$arguments106['additionalParams'] = array (
);
$arguments106['absolute'] = false;
$arguments106['addQueryString'] = false;
$arguments106['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments106['addQueryStringMethod'] = NULL;
$arguments106['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array108 = [];
$array108['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber');
$arguments106['arguments'] = $array108;
// Rendering Boolean node
// Rendering Array
$array109 = [];
$array109['0'] = 1;

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output105 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return NULL;
};
$arguments111 = [];
$arguments111['key'] = NULL;
$arguments111['id'] = NULL;
$arguments111['default'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['languageKey'] = NULL;
$arguments111['alternativeLanguageKeys'] = NULL;
$arguments111['key'] = 'pagination.next';

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output105 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};
$arguments113 = [];
$arguments113['key'] = NULL;
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['languageKey'] = NULL;
$arguments113['alternativeLanguageKeys'] = NULL;
$arguments113['key'] = 'widget.pagination.next';
$arguments113['extensionName'] = 'fluid';

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output105 .= '
                    </a>
                </li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
$output117 = '';

$output117 .= '
                    <li class="last">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return NULL;
};
$arguments118 = [];
$arguments118['action'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['controller'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['pluginName'] = NULL;
$arguments118['pageUid'] = NULL;
$arguments118['pageType'] = 0;
$arguments118['noCache'] = NULL;
$arguments118['section'] = '';
$arguments118['format'] = '';
$arguments118['linkAccessRestrictedPages'] = false;
$arguments118['additionalParams'] = array (
);
$arguments118['absolute'] = false;
$arguments118['addQueryString'] = false;
$arguments118['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments118['addQueryStringMethod'] = NULL;
$arguments118['action'] = $renderingContext->getVariableProvider()->getByPath('actionName');
// Rendering Array
$array120 = [];
$array120['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber');
$arguments118['arguments'] = $array120;
// Rendering Boolean node
// Rendering Array
$array121 = [];
$array121['0'] = 1;

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments118['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
return NULL;
};
$arguments123 = [];
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'pagination.last';

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output117 .= '">
                            last
                        </a>
                    </li>
                ';
return $output117;
};
$arguments115 = [];

$output105 .= '';

$output105 .= '
            ';
return $output105;
};
$arguments103['__elseClosures'][] = function() use ($renderingContext) {
$output125 = '';

$output125 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
$output128 = '';

$output128 .= '
                    <li class="disabled"><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return NULL;
};
$arguments129 = [];
$arguments129['key'] = NULL;
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['languageKey'] = NULL;
$arguments129['alternativeLanguageKeys'] = NULL;
$arguments129['key'] = 'widget.pagination.next';
$arguments129['extensionName'] = 'fluid';

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '</span></li>
                    <li class="disabled"><span>last page</span></li>
                ';
return $output128;
};
$arguments126 = [];

$output125 .= '';

$output125 .= '
            ';
return $output125;
};

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output7 .= '
    </ul>
';
return $output7;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = [];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('pagination.allPageNumbers');
};
$arguments4 = [];
$arguments4['subject'] = NULL;
$renderChildrenClosure5 = ($arguments4['subject'] !== null) ? function() use ($arguments4) { return $arguments4['subject']; } : $renderChildrenClosure5;$array3['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
$array3['1'] = ' > 1';

$expression6 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#