<?php

class Standard_action_systemInformationDropDown_bb323c3a413aa0472e138b7682fc65955cb3e388 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
<span class="systeminformationtoolbaritem-container t3js-systeminformation-container" data-count="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count')]);

$output0 .= '"
            data-severityclass="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('severityBadgeClass')]);

$output0 .= '"></span>

<h3 class="dropdown-headline">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
$arguments1 = [];
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'systemmessage.header';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
</h3>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
    <p class="dropdown-text typo3-module-menu-item submodule mod-tools_toolsenvironment" data-modulename="tools_toolsenvironment">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};
$arguments11 = [];
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'systemmessage.intro';
// Rendering Array
$array13 = [];
$array13['0'] = $renderingContext->getVariableProvider()->getByPath('environmentToolUrl');
$arguments11['arguments'] = $array13;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
        ';
return $output10;
};
$arguments8 = [];
$arguments8['value'] = NULL;

$output7 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output7 .= '
    </p>
';
return $output7;
};
$arguments3 = [];
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = [];
$array5['0'] = $renderingContext->getVariableProvider()->getByPath('environmentToolUrl');

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
    <hr>
    <div class="dropdown-table">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
$output21 = '';

$output21 .= '
            <div class="dropdown-table-row">
                <div class="dropdown-table-column dropdown-table-column-top dropdown-table-icon">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};
$arguments35 = [];
$arguments35['identifier'] = NULL;
$arguments35['size'] = 'small';
$arguments35['overlay'] = NULL;
$arguments35['state'] = 'default';
$arguments35['alternativeMarkupIdentifier'] = NULL;
$arguments35['identifier'] = $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier');
$arguments35['size'] = 'small';
$arguments35['alternativeMarkupIdentifier'] = 'inline';

$output34 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                        ';
return $output34;
};
$arguments32 = [];

$output31 .= '';

$output31 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('info.icon');
};
$arguments39 = [];
$arguments39['value'] = NULL;
return isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();
};
$arguments37 = [];
$arguments37['if'] = NULL;

$output31 .= '';

$output31 .= '
                    ';
return $output31;
};
$arguments22 = [];
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = [];
$array29['0'] = $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier');

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = function() use ($renderingContext) {
$output24 = '';

$output24 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};
$arguments25 = [];
$arguments25['identifier'] = NULL;
$arguments25['size'] = 'small';
$arguments25['overlay'] = NULL;
$arguments25['state'] = 'default';
$arguments25['alternativeMarkupIdentifier'] = NULL;
$arguments25['identifier'] = $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier');
$arguments25['size'] = 'small';
$arguments25['alternativeMarkupIdentifier'] = 'inline';

$output24 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                        ';
return $output24;
};
$arguments22['__elseClosures'][] = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('info.icon');
};
$arguments27 = [];
$arguments27['value'] = NULL;
return isset($arguments27['value']) ? $arguments27['value'] : $renderChildrenClosure28();
};

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
                </div>
                <div class="dropdown-table-column dropdown-table-column-top dropdown-table-title">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};
$arguments41 = [];
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['languageKey'] = NULL;
$arguments41['alternativeLanguageKeys'] = NULL;
$arguments41['key'] = $renderingContext->getVariableProvider()->getByPath('info.title');
$arguments41['default'] = $renderingContext->getVariableProvider()->getByPath('info.title');

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output21 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output47 = '';

$output47 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('info.titleAddition');
};
$arguments48 = [];
$arguments48['value'] = NULL;
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = 'UTF-8';
$arguments48['doubleEncode'] = true;
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output47 .= !is_string($value50) && !(is_object($value50) && method_exists($value50, '__toString')) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments48['encoding'], $arguments48['doubleEncode']);

$output47 .= ')';
return $output47;
};
$arguments43 = [];
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = [];
$array45['0'] = $renderingContext->getVariableProvider()->getByPath('info.titleAddition');

$expression46 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = $renderChildrenClosure44;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output21 .= '
                </div>
                <div
                    class="dropdown-table-column dropdown-table-column-top dropdown-table-value ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};
$arguments51 = [];
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = [];
$array53['0'] = $renderingContext->getVariableProvider()->getByPath('info.status');

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$output55 = '';

$output55 .= 'text-';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('info.status')]);
$arguments51['then'] = $output55;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output21 .= '">
                    ';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('info.value')]);

$output21 .= '
                </div>
            </div>
        ';
return $output21;
};
$arguments19 = [];
$arguments19['each'] = NULL;
$arguments19['as'] = NULL;
$arguments19['key'] = NULL;
$arguments19['reverse'] = false;
$arguments19['iteration'] = NULL;
$arguments19['each'] = $renderingContext->getVariableProvider()->getByPath('systemInformation');
$arguments19['as'] = 'info';

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
    </div>
';
return $output18;
};
$arguments14 = [];
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = [];
$array16['0'] = $renderingContext->getVariableProvider()->getByPath('systemInformation');

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = $renderChildrenClosure15;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '

<hr>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
$output93 = '';

$output93 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure95 = function() use ($renderingContext) {
$output96 = '';

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
$output99 = '';

$output99 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext) {
$output110 = '';

$output110 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
$output113 = '';

$output113 .= '
                    <p id="systeminformation_';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output113 .= '"
                        class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output113 .= '"
                        data-modulename="';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output113 .= '" data-moduleparams="';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.params')]);

$output113 .= '">
                        <span class="text-';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output113 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};
$arguments114 = [];
$arguments114['value'] = NULL;

$output113 .= isset($arguments114['value']) ? $arguments114['value'] : $renderChildrenClosure115();

$output113 .= '</span>
                    </p>
                ';
return $output113;
};
$arguments111 = [];

$output110 .= '';

$output110 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
$output118 = '';

$output118 .= '
                    <p class="dropdown-text text-';

$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output118 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};
$arguments119 = [];
$arguments119['value'] = NULL;

$output118 .= isset($arguments119['value']) ? $arguments119['value'] : $renderChildrenClosure120();

$output118 .= '
                    </p>
                ';
return $output118;
};
$arguments116 = [];
$arguments116['if'] = NULL;

$output110 .= '';

$output110 .= '
            ';
return $output110;
};
$arguments100 = [];
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = [];
$array108['0'] = $renderingContext->getVariableProvider()->getByPath('message.module');

$expression109 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = function() use ($renderingContext) {
$output102 = '';

$output102 .= '
                    <p id="systeminformation_';

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output102 .= '"
                        class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output102 .= '"
                        data-modulename="';

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output102 .= '" data-moduleparams="';

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.params')]);

$output102 .= '">
                        <span class="text-';

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output102 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};
$arguments103 = [];
$arguments103['value'] = NULL;

$output102 .= isset($arguments103['value']) ? $arguments103['value'] : $renderChildrenClosure104();

$output102 .= '</span>
                    </p>
                ';
return $output102;
};
$arguments100['__elseClosures'][] = function() use ($renderingContext) {
$output105 = '';

$output105 .= '
                    <p class="dropdown-text text-';

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output105 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};
$arguments106 = [];
$arguments106['value'] = NULL;

$output105 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output105 .= '
                    </p>
                ';
return $output105;
};

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
        ';
return $output99;
};
$arguments97 = [];
$arguments97['each'] = NULL;
$arguments97['as'] = NULL;
$arguments97['key'] = NULL;
$arguments97['reverse'] = false;
$arguments97['iteration'] = NULL;
$arguments97['each'] = $renderingContext->getVariableProvider()->getByPath('messages');
$arguments97['as'] = 'message';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
    ';
return $output96;
};
$arguments94 = [];

$output93 .= '';

$output93 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure122 = function() use ($renderingContext) {
$output123 = '';

$output123 .= '
        <p class="dropdown-text text-success">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure125 = function() use ($renderingContext) {
$output126 = '';

$output126 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};
$arguments127 = [];
$arguments127['key'] = NULL;
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$arguments127['languageKey'] = NULL;
$arguments127['alternativeLanguageKeys'] = NULL;
$arguments127['key'] = 'systemmessage.allgood';

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output126 .= '
            ';
return $output126;
};
$arguments124 = [];
$arguments124['value'] = NULL;
$renderChildrenClosure125 = ($arguments124['value'] !== null) ? function() use ($arguments124) { return $arguments124['value']; } : $renderChildrenClosure125;
$output123 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
        </p>
    ';
return $output123;
};
$arguments121 = [];
$arguments121['if'] = NULL;

$output93 .= '';

$output93 .= '
';
return $output93;
};
$arguments56 = [];
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = [];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('messages');
};
$arguments90 = [];
$arguments90['subject'] = NULL;
$renderChildrenClosure91 = ($arguments90['subject'] !== null) ? function() use ($arguments90) { return $arguments90['subject']; } : $renderChildrenClosure91;$array89['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);
$array89['1'] = ' > 0';

$expression92 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = function() use ($renderingContext) {
$output58 = '';

$output58 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
$output61 = '';

$output61 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
$output72 = '';

$output72 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
$output75 = '';

$output75 .= '
                    <p id="systeminformation_';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output75 .= '"
                        class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output75 .= '"
                        data-modulename="';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output75 .= '" data-moduleparams="';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.params')]);

$output75 .= '">
                        <span class="text-';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output75 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};
$arguments76 = [];
$arguments76['value'] = NULL;

$output75 .= isset($arguments76['value']) ? $arguments76['value'] : $renderChildrenClosure77();

$output75 .= '</span>
                    </p>
                ';
return $output75;
};
$arguments73 = [];

$output72 .= '';

$output72 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
$output80 = '';

$output80 .= '
                    <p class="dropdown-text text-';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output80 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};
$arguments81 = [];
$arguments81['value'] = NULL;

$output80 .= isset($arguments81['value']) ? $arguments81['value'] : $renderChildrenClosure82();

$output80 .= '
                    </p>
                ';
return $output80;
};
$arguments78 = [];
$arguments78['if'] = NULL;

$output72 .= '';

$output72 .= '
            ';
return $output72;
};
$arguments62 = [];
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = [];
$array70['0'] = $renderingContext->getVariableProvider()->getByPath('message.module');

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = function() use ($renderingContext) {
$output64 = '';

$output64 .= '
                    <p id="systeminformation_';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output64 .= '"
                        class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output64 .= '"
                        data-modulename="';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output64 .= '" data-moduleparams="';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.params')]);

$output64 .= '">
                        <span class="text-';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output64 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};
$arguments65 = [];
$arguments65['value'] = NULL;

$output64 .= isset($arguments65['value']) ? $arguments65['value'] : $renderChildrenClosure66();

$output64 .= '</span>
                    </p>
                ';
return $output64;
};
$arguments62['__elseClosures'][] = function() use ($renderingContext) {
$output67 = '';

$output67 .= '
                    <p class="dropdown-text text-';

$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output67 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};
$arguments68 = [];
$arguments68['value'] = NULL;

$output67 .= isset($arguments68['value']) ? $arguments68['value'] : $renderChildrenClosure69();

$output67 .= '
                    </p>
                ';
return $output67;
};

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
        ';
return $output61;
};
$arguments59 = [];
$arguments59['each'] = NULL;
$arguments59['as'] = NULL;
$arguments59['key'] = NULL;
$arguments59['reverse'] = false;
$arguments59['iteration'] = NULL;
$arguments59['each'] = $renderingContext->getVariableProvider()->getByPath('messages');
$arguments59['as'] = 'message';

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
    ';
return $output58;
};
$arguments56['__elseClosures'][] = function() use ($renderingContext) {
$output83 = '';

$output83 .= '
        <p class="dropdown-text text-success">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
$output86 = '';

$output86 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return NULL;
};
$arguments87 = [];
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'systemmessage.allgood';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output86 .= '
            ';
return $output86;
};
$arguments84 = [];
$arguments84['value'] = NULL;
$renderChildrenClosure85 = ($arguments84['value'] !== null) ? function() use ($arguments84) { return $arguments84['value']; } : $renderChildrenClosure85;
$output83 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
        </p>
    ';
return $output83;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#