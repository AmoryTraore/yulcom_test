<?php

class partial_Navigation_Main_d7dab08fe2c8a1f86b5d5c9fab84e383aa45ce52 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
$output117 = '';

$output117 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments118 = [];

$output117 .= '';

$output117 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure121 = function() use ($renderingContext) {
$output122 = '';

$output122 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
return NULL;
};
$arguments123 = [];
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = [];
$array125['0'] = $renderingContext->getVariableProvider()->getByPath('item.active');

$expression126 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['then'] = ' active';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};
$arguments127 = [];
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array129 = [];
$array129['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments127['then'] = ' dropdown dropdown-hover';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output122 .= '">
                            <a href="';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link')]);

$output122 .= '" id="nav-item-';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output122 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
return NULL;
};
$arguments131 = [];
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = [];
$array133['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments131['then'] = ' dropdown-toggle';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output122 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext) {
return NULL;
};
$arguments135 = [];
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array137 = [];
$array137['0'] = $renderingContext->getVariableProvider()->getByPath('item.target');

$expression138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);
$output139 = '';

$output139 .= ' target="';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target')]);

$output139 .= '"';
$arguments135['then'] = $output139;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext) {
return NULL;
};
$arguments140 = [];
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = [];
$array142['0'] = $renderingContext->getVariableProvider()->getByPath('item.target');
$array142['1'] = ' == "_blank"';

$expression143 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['then'] = ' rel="noopener noreferrer"';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output122 .= ' title="';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output122 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext) {
return NULL;
};
$arguments144 = [];
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = [];
$array146['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression147 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output122 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
$output152 = '';

$output152 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure154 = function() use ($renderingContext) {
return NULL;
};
$arguments153 = [];
$arguments153['icon'] = NULL;
$arguments153['height'] = NULL;
$arguments153['width'] = NULL;
$arguments153['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon');
$arguments153['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width');
$arguments153['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height');

$output152 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                                    </span>
                                ';
return $output152;
};
$arguments148 = [];
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$arguments148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array150 = [];
$array150['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable');
$array150['1'] = ' && ';
$array150['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon');

$expression151 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
$arguments148['__thenClosure'] = $renderChildrenClosure149;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output122 .= '
                                <span class="nav-link-text">';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure156 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments155 = [];
$arguments155['then'] = NULL;
$arguments155['else'] = NULL;
$arguments155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array157 = [];
$array157['0'] = $renderingContext->getVariableProvider()->getByPath('item.current');

$expression158 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
$arguments155['__thenClosure'] = $renderChildrenClosure156;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output122 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext) {
$output163 = '';

$output163 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output163 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure165 = function() use ($renderingContext) {
$output166 = '';

$output166 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext) {
$output196 = '';

$output196 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure198 = function() use ($renderingContext) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments197 = [];

$output196 .= '';

$output196 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure200 = function() use ($renderingContext) {
$output201 = '';

$output201 .= '
                                                <li>
                                                    <a href="';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link')]);

$output201 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext) {
return NULL;
};
$arguments202 = [];
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = [];
$array204['0'] = $renderingContext->getVariableProvider()->getByPath('child.active');

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['then'] = ' active';

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext) {
return NULL;
};
$arguments206 = [];
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array208 = [];
$array208['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');

$expression209 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
$output210 = '';

$output210 .= ' target="';

$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target')]);

$output210 .= '"';
$arguments206['then'] = $output210;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure212 = function() use ($renderingContext) {
return NULL;
};
$arguments211 = [];
$arguments211['then'] = NULL;
$arguments211['else'] = NULL;
$arguments211['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = [];
$array213['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');
$array213['1'] = ' == "_blank"';

$expression214 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments211['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments211['then'] = ' rel="noopener noreferrer"';

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output201 .= ' title="';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output201 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure216 = function() use ($renderingContext) {
$output219 = '';

$output219 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure221 = function() use ($renderingContext) {
return NULL;
};
$arguments220 = [];
$arguments220['icon'] = NULL;
$arguments220['height'] = NULL;
$arguments220['width'] = NULL;
$arguments220['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon');
$arguments220['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width');
$arguments220['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height');

$output219 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
                                                            </span>
                                                        ';
return $output219;
};
$arguments215 = [];
$arguments215['then'] = NULL;
$arguments215['else'] = NULL;
$arguments215['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array217 = [];
$array217['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable');
$array217['1'] = ' && ';
$array217['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon');

$expression218 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments215['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);
$arguments215['__thenClosure'] = $renderChildrenClosure216;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output201 .= '
                                                        <span class="dropdown-text">';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure223 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments222 = [];
$arguments222['then'] = NULL;
$arguments222['else'] = NULL;
$arguments222['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array224 = [];
$array224['0'] = $renderingContext->getVariableProvider()->getByPath('child.current');

$expression225 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments222['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array224)
					),
					$renderingContext
				);
$arguments222['__thenClosure'] = $renderChildrenClosure223;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output201 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output201;
};
$arguments199 = [];
$arguments199['if'] = NULL;

$output196 .= '';

$output196 .= '
                                        ';
return $output196;
};
$arguments167 = [];
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = [];
$array194['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer');

$expression195 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression195(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = function() use ($renderingContext) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments167['__elseClosures'][] = function() use ($renderingContext) {
$output169 = '';

$output169 .= '
                                                <li>
                                                    <a href="';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link')]);

$output169 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure171 = function() use ($renderingContext) {
return NULL;
};
$arguments170 = [];
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$arguments170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = [];
$array172['0'] = $renderingContext->getVariableProvider()->getByPath('child.active');

$expression173 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments170['then'] = ' active';

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure175 = function() use ($renderingContext) {
return NULL;
};
$arguments174 = [];
$arguments174['then'] = NULL;
$arguments174['else'] = NULL;
$arguments174['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array176 = [];
$array176['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');

$expression177 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments174['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array176)
					),
					$renderingContext
				);
$output178 = '';

$output178 .= ' target="';

$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target')]);

$output178 .= '"';
$arguments174['then'] = $output178;

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure180 = function() use ($renderingContext) {
return NULL;
};
$arguments179 = [];
$arguments179['then'] = NULL;
$arguments179['else'] = NULL;
$arguments179['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array181 = [];
$array181['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');
$array181['1'] = ' == "_blank"';

$expression182 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments179['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array181)
					),
					$renderingContext
				);
$arguments179['then'] = ' rel="noopener noreferrer"';

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output169 .= ' title="';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output169 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext) {
$output187 = '';

$output187 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure189 = function() use ($renderingContext) {
return NULL;
};
$arguments188 = [];
$arguments188['icon'] = NULL;
$arguments188['height'] = NULL;
$arguments188['width'] = NULL;
$arguments188['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon');
$arguments188['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width');
$arguments188['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height');

$output187 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
                                                            </span>
                                                        ';
return $output187;
};
$arguments183 = [];
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = [];
$array185['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable');
$array185['1'] = ' && ';
$array185['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon');

$expression186 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments183['__thenClosure'] = $renderChildrenClosure184;

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output169 .= '
                                                        <span class="dropdown-text">';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments190 = [];
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = [];
$array192['0'] = $renderingContext->getVariableProvider()->getByPath('child.current');

$expression193 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$arguments190['__thenClosure'] = $renderChildrenClosure191;

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output169 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output169;
};

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '
                                    ';
return $output166;
};
$arguments164 = [];
$arguments164['each'] = NULL;
$arguments164['as'] = NULL;
$arguments164['key'] = NULL;
$arguments164['reverse'] = false;
$arguments164['iteration'] = NULL;
$arguments164['each'] = $renderingContext->getVariableProvider()->getByPath('item.children');
$arguments164['as'] = 'child';

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
                                </ul>
                            ';
return $output163;
};
$arguments159 = [];
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = [];
$array161['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression162 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['__thenClosure'] = $renderChildrenClosure160;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output122 .= '
                        </li>
                        
                    ';
return $output122;
};
$arguments120 = [];
$arguments120['if'] = NULL;

$output117 .= '';

$output117 .= '
                ';
return $output117;
};
$arguments9 = [];
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = [];
$array115['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer');

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = function() use ($renderingContext) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments9['__elseClosures'][] = function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
$arguments12 = [];
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = [];
$array14['0'] = $renderingContext->getVariableProvider()->getByPath('item.active');

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['then'] = ' active';

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};
$arguments16 = [];
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = [];
$array18['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['then'] = ' dropdown dropdown-hover';

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output11 .= '">
                            <a href="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link')]);

$output11 .= '" id="nav-item-';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output11 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};
$arguments20 = [];
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = [];
$array22['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['then'] = ' dropdown-toggle';

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output11 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};
$arguments24 = [];
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = [];
$array26['0'] = $renderingContext->getVariableProvider()->getByPath('item.target');

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$output28 = '';

$output28 .= ' target="';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target')]);

$output28 .= '"';
$arguments24['then'] = $output28;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};
$arguments29 = [];
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = [];
$array31['0'] = $renderingContext->getVariableProvider()->getByPath('item.target');
$array31['1'] = ' == "_blank"';

$expression32 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['then'] = ' rel="noopener noreferrer"';

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output11 .= ' title="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output11 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};
$arguments33 = [];
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = [];
$array35['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output11 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
$output41 = '';

$output41 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};
$arguments42 = [];
$arguments42['icon'] = NULL;
$arguments42['height'] = NULL;
$arguments42['width'] = NULL;
$arguments42['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon');
$arguments42['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width');
$arguments42['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height');

$output41 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                                    </span>
                                ';
return $output41;
};
$arguments37 = [];
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = [];
$array39['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable');
$array39['1'] = ' && ';
$array39['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon');

$expression40 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = $renderChildrenClosure38;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output11 .= '
                                <span class="nav-link-text">';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments44 = [];
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = [];
$array46['0'] = $renderingContext->getVariableProvider()->getByPath('item.current');

$expression47 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output11 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
$output52 = '';

$output52 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output52 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
$output55 = '';

$output55 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
$output85 = '';

$output85 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments86 = [];

$output85 .= '';

$output85 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
$output90 = '';

$output90 .= '
                                                <li>
                                                    <a href="';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link')]);

$output90 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return NULL;
};
$arguments91 = [];
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = [];
$array93['0'] = $renderingContext->getVariableProvider()->getByPath('child.active');

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['then'] = ' active';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};
$arguments95 = [];
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = [];
$array97['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$output99 = '';

$output99 .= ' target="';

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target')]);

$output99 .= '"';
$arguments95['then'] = $output99;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext) {
return NULL;
};
$arguments100 = [];
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = [];
$array102['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');
$array102['1'] = ' == "_blank"';

$expression103 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['then'] = ' rel="noopener noreferrer"';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output90 .= ' title="';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output90 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext) {
$output108 = '';

$output108 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};
$arguments109 = [];
$arguments109['icon'] = NULL;
$arguments109['height'] = NULL;
$arguments109['width'] = NULL;
$arguments109['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon');
$arguments109['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width');
$arguments109['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height');

$output108 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
                                                            </span>
                                                        ';
return $output108;
};
$arguments104 = [];
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = [];
$array106['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable');
$array106['1'] = ' && ';
$array106['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon');

$expression107 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments104['__thenClosure'] = $renderChildrenClosure105;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output90 .= '
                                                        <span class="dropdown-text">';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments111 = [];
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = [];
$array113['0'] = $renderingContext->getVariableProvider()->getByPath('child.current');

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = $renderChildrenClosure112;

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output90 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output90;
};
$arguments88 = [];
$arguments88['if'] = NULL;

$output85 .= '';

$output85 .= '
                                        ';
return $output85;
};
$arguments56 = [];
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = [];
$array83['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer');

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = function() use ($renderingContext) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments56['__elseClosures'][] = function() use ($renderingContext) {
$output58 = '';

$output58 .= '
                                                <li>
                                                    <a href="';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link')]);

$output58 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};
$arguments59 = [];
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = [];
$array61['0'] = $renderingContext->getVariableProvider()->getByPath('child.active');

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments59['then'] = ' active';

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};
$arguments63 = [];
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = [];
$array65['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$output67 = '';

$output67 .= ' target="';

$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target')]);

$output67 .= '"';
$arguments63['then'] = $output67;

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};
$arguments68 = [];
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = [];
$array70['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');
$array70['1'] = ' == "_blank"';

$expression71 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments68['then'] = ' rel="noopener noreferrer"';

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output58 .= ' title="';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output58 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
$output76 = '';

$output76 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};
$arguments77 = [];
$arguments77['icon'] = NULL;
$arguments77['height'] = NULL;
$arguments77['width'] = NULL;
$arguments77['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon');
$arguments77['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width');
$arguments77['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height');

$output76 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                                                            </span>
                                                        ';
return $output76;
};
$arguments72 = [];
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = [];
$array74['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable');
$array74['1'] = ' && ';
$array74['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon');

$expression75 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = $renderChildrenClosure73;

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output58 .= '
                                                        <span class="dropdown-text">';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments79 = [];
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = [];
$array81['0'] = $renderingContext->getVariableProvider()->getByPath('child.current');

$expression82 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output58 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output58;
};

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                                    ';
return $output55;
};
$arguments53 = [];
$arguments53['each'] = NULL;
$arguments53['as'] = NULL;
$arguments53['key'] = NULL;
$arguments53['reverse'] = false;
$arguments53['iteration'] = NULL;
$arguments53['each'] = $renderingContext->getVariableProvider()->getByPath('item.children');
$arguments53['as'] = 'child';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
                                </ul>
                            ';
return $output52;
};
$arguments48 = [];
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = [];
$array50['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output11 .= '
                        </li>
                        
                    ';
return $output11;
};

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            ';
return $output8;
};
$arguments6 = [];
$arguments6['each'] = NULL;
$arguments6['as'] = NULL;
$arguments6['key'] = NULL;
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$arguments6['each'] = $renderingContext->getVariableProvider()->getByPath('menu');
$arguments6['as'] = 'item';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
            

            <!-- Search Button -->
           <li>

               <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
               <div class="south-search-form">
                 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure227 = function() use ($renderingContext) {
return NULL;
};
$arguments226 = [];
$arguments226['data'] = NULL;
$arguments226['typoscriptObjectPath'] = NULL;
$arguments226['currentValueKey'] = NULL;
$arguments226['table'] = '';
$arguments226['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array228 = [];
$array228['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid');
$array228['colPos'] = 3;
$arguments226['data'] = $array228;
$renderChildrenClosure227 = ($arguments226['data'] !== null) ? function() use ($arguments226) { return $arguments226['data']; } : $renderChildrenClosure227;
$output5 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output5 .= '
              </div>
           </li>
        </ul>
    ';
return $output5;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = [];
$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu');

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression4(
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
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output229 = '';

$output229 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure231 = function() use ($renderingContext) {
$output232 = '';

$output232 .= 'bp-page-header navbar navbar-mainnavigation navbar-';

$output232 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.style');
return $output232;
};
$arguments230 = [];
$arguments230['value'] = NULL;
$arguments230['name'] = NULL;
$arguments230['name'] = 'headerClass';
$renderChildrenClosure231 = ($arguments230['value'] !== null) ? function() use ($arguments230) { return $arguments230['value']; } : $renderChildrenClosure231;
$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output229 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure234 = function() use ($renderingContext) {
$output235 = '';

$output235 .= $renderingContext->getVariableProvider()->getByPath('headerClass');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure237 = function() use ($renderingContext) {
return NULL;
};
$arguments236 = [];
$arguments236['then'] = NULL;
$arguments236['else'] = NULL;
$arguments236['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array238 = [];
$array238['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal');

$expression239 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments236['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array238)
					),
					$renderingContext
				);
$arguments236['then'] = ' navbar-has-image';

$output235 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);
return $output235;
};
$arguments233 = [];
$arguments233['value'] = NULL;
$arguments233['name'] = NULL;
$arguments233['name'] = 'headerClass';
$renderChildrenClosure234 = ($arguments233['value'] !== null) ? function() use ($arguments233) { return $arguments233['value']; } : $renderChildrenClosure234;
$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output229 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure241 = function() use ($renderingContext) {
$output242 = '';

$output242 .= $renderingContext->getVariableProvider()->getByPath('headerClass');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure244 = function() use ($renderingContext) {
return NULL;
};
$arguments243 = [];
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$arguments243['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = [];
$array245['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type');

$expression246 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments243['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments243['else'] = ' navbar-top';
$output247 = '';

$output247 .= ' navbar-';

$output247 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type');

$output247 .= ' navbar-fixed-';

$output247 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type');
$arguments243['then'] = $output247;

$output242 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);
return $output242;
};
$arguments240 = [];
$arguments240['value'] = NULL;
$arguments240['name'] = NULL;
$arguments240['name'] = 'headerClass';
$renderChildrenClosure241 = ($arguments240['value'] !== null) ? function() use ($arguments240) { return $arguments240['value']; } : $renderChildrenClosure241;
$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output229 .= '
<header id="page-header" class="';

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headerClass')]);

$output229 .= '">
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure249 = function() use ($renderingContext) {
$output255 = '';

$output255 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure257 = function() use ($renderingContext) {
$output271 = '';

$output271 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure273 = function() use ($renderingContext) {
$output274 = '';

$output274 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure276 = function() use ($renderingContext) {
return NULL;
};
$arguments275 = [];
$arguments275['src'] = '';
$arguments275['treatIdAsReference'] = false;
$arguments275['image'] = NULL;
$arguments275['crop'] = NULL;
$arguments275['cropVariant'] = 'default';
$arguments275['fileExtension'] = NULL;
$arguments275['width'] = NULL;
$arguments275['height'] = NULL;
$arguments275['minWidth'] = NULL;
$arguments275['minHeight'] = NULL;
$arguments275['maxWidth'] = NULL;
$arguments275['maxHeight'] = NULL;
$arguments275['absolute'] = false;
$arguments275['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal');

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext)]);

$output274 .= '" alt="';

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt')]);

$output274 .= '" height="';

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height')]);

$output274 .= '" width="';

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width')]);

$output274 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure278 = function() use ($renderingContext) {
$output281 = '';

$output281 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure283 = function() use ($renderingContext) {
return NULL;
};
$arguments282 = [];
$arguments282['src'] = '';
$arguments282['treatIdAsReference'] = false;
$arguments282['image'] = NULL;
$arguments282['crop'] = NULL;
$arguments282['cropVariant'] = 'default';
$arguments282['fileExtension'] = NULL;
$arguments282['width'] = NULL;
$arguments282['height'] = NULL;
$arguments282['minWidth'] = NULL;
$arguments282['minHeight'] = NULL;
$arguments282['maxWidth'] = NULL;
$arguments282['maxHeight'] = NULL;
$arguments282['absolute'] = false;
$arguments282['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted');

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output281 .= '" alt="';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt')]);

$output281 .= '" height="';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height')]);

$output281 .= '" width="';

$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width')]);

$output281 .= '">
                    ';
return $output281;
};
$arguments277 = [];
$arguments277['then'] = NULL;
$arguments277['else'] = NULL;
$arguments277['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array279 = [];
$array279['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted');

$expression280 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments277['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array279)
					),
					$renderingContext
				);
$arguments277['__thenClosure'] = $renderChildrenClosure278;

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output274 .= '
                ';
return $output274;
};
$arguments272 = [];

$output271 .= '';

$output271 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure285 = function() use ($renderingContext) {
$output286 = '';

$output286 .= '
                    <span>';

$output286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle')]);

$output286 .= '</span>
                ';
return $output286;
};
$arguments284 = [];
$arguments284['if'] = NULL;

$output271 .= '';

$output271 .= '
            ';
return $output271;
};
$arguments256 = [];
$arguments256['then'] = NULL;
$arguments256['else'] = NULL;
$arguments256['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array269 = [];
$array269['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal');

$expression270 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments256['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array269)
					),
					$renderingContext
				);
$arguments256['__thenClosure'] = function() use ($renderingContext) {
$output258 = '';

$output258 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure260 = function() use ($renderingContext) {
return NULL;
};
$arguments259 = [];
$arguments259['src'] = '';
$arguments259['treatIdAsReference'] = false;
$arguments259['image'] = NULL;
$arguments259['crop'] = NULL;
$arguments259['cropVariant'] = 'default';
$arguments259['fileExtension'] = NULL;
$arguments259['width'] = NULL;
$arguments259['height'] = NULL;
$arguments259['minWidth'] = NULL;
$arguments259['minHeight'] = NULL;
$arguments259['maxWidth'] = NULL;
$arguments259['maxHeight'] = NULL;
$arguments259['absolute'] = false;
$arguments259['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal');

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output258 .= '" alt="';

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt')]);

$output258 .= '" height="';

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height')]);

$output258 .= '" width="';

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width')]);

$output258 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure262 = function() use ($renderingContext) {
$output265 = '';

$output265 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure267 = function() use ($renderingContext) {
return NULL;
};
$arguments266 = [];
$arguments266['src'] = '';
$arguments266['treatIdAsReference'] = false;
$arguments266['image'] = NULL;
$arguments266['crop'] = NULL;
$arguments266['cropVariant'] = 'default';
$arguments266['fileExtension'] = NULL;
$arguments266['width'] = NULL;
$arguments266['height'] = NULL;
$arguments266['minWidth'] = NULL;
$arguments266['minHeight'] = NULL;
$arguments266['maxWidth'] = NULL;
$arguments266['maxHeight'] = NULL;
$arguments266['absolute'] = false;
$arguments266['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted');

$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext)]);

$output265 .= '" alt="';

$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt')]);

$output265 .= '" height="';

$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height')]);

$output265 .= '" width="';

$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width')]);

$output265 .= '">
                    ';
return $output265;
};
$arguments261 = [];
$arguments261['then'] = NULL;
$arguments261['else'] = NULL;
$arguments261['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array263 = [];
$array263['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted');

$expression264 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments261['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array263)
					),
					$renderingContext
				);
$arguments261['__thenClosure'] = $renderChildrenClosure262;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output258 .= '
                ';
return $output258;
};
$arguments256['__elseClosures'][] = function() use ($renderingContext) {
$output268 = '';

$output268 .= '
                    <span>';

$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle')]);

$output268 .= '</span>
                ';
return $output268;
};

$output255 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
        ';
return $output255;
};
$arguments248 = [];
$arguments248['additionalAttributes'] = NULL;
$arguments248['data'] = NULL;
$arguments248['aria'] = NULL;
$arguments248['class'] = NULL;
$arguments248['dir'] = NULL;
$arguments248['id'] = NULL;
$arguments248['lang'] = NULL;
$arguments248['style'] = NULL;
$arguments248['title'] = NULL;
$arguments248['accesskey'] = NULL;
$arguments248['tabindex'] = NULL;
$arguments248['onclick'] = NULL;
$arguments248['target'] = NULL;
$arguments248['rel'] = NULL;
$arguments248['pageUid'] = NULL;
$arguments248['pageType'] = NULL;
$arguments248['noCache'] = NULL;
$arguments248['language'] = NULL;
$arguments248['section'] = NULL;
$arguments248['linkAccessRestrictedPages'] = NULL;
$arguments248['additionalParams'] = NULL;
$arguments248['absolute'] = NULL;
$arguments248['addQueryString'] = NULL;
$arguments248['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments248['addQueryStringMethod'] = NULL;
$arguments248['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage');
$output250 = '';

$output250 .= 'navbar-brand navbar-brand-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure252 = function() use ($renderingContext) {
return NULL;
};
$arguments251 = [];
$arguments251['then'] = NULL;
$arguments251['else'] = NULL;
$arguments251['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array253 = [];
$array253['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal');

$expression254 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments251['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array253)
					),
					$renderingContext
				);
$arguments251['then'] = 'image';
$arguments251['else'] = 'text';

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);
$arguments248['class'] = $output250;
$arguments248['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle');

$output229 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output229 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext) {
$output291 = '';

$output291 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#mainnavigation" data-bs-target="#mainnavigation" aria-controls="mainnavigation" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure293 = function() use ($renderingContext) {
return NULL;
};
$arguments292 = [];
$arguments292['key'] = NULL;
$arguments292['id'] = NULL;
$arguments292['default'] = NULL;
$arguments292['arguments'] = NULL;
$arguments292['extensionName'] = NULL;
$arguments292['languageKey'] = NULL;
$arguments292['alternativeLanguageKeys'] = NULL;
$arguments292['key'] = 'togglenavigation';
$arguments292['extensionName'] = 'bootstrap_package';

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext)]);

$output291 .= '">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure295 = function() use ($renderingContext) {
return NULL;
};
$arguments294 = [];
$arguments294['section'] = NULL;
$arguments294['partial'] = NULL;
$arguments294['delegate'] = NULL;
$arguments294['renderable'] = NULL;
$arguments294['arguments'] = array (
);
$arguments294['optional'] = false;
$arguments294['default'] = NULL;
$arguments294['contentAs'] = NULL;
$arguments294['debug'] = true;
$arguments294['partial'] = 'DropIn/Navigation/MainBefore';
$arguments294['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output291 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output291 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure297 = function() use ($renderingContext) {
return NULL;
};
$arguments296 = [];
$arguments296['section'] = NULL;
$arguments296['partial'] = NULL;
$arguments296['delegate'] = NULL;
$arguments296['renderable'] = NULL;
$arguments296['arguments'] = array (
);
$arguments296['optional'] = false;
$arguments296['default'] = NULL;
$arguments296['contentAs'] = NULL;
$arguments296['debug'] = true;
$arguments296['section'] = 'MainNavigation';
// Rendering Array
$array298 = [];
$array298['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation');
$array298['theme'] = $renderingContext->getVariableProvider()->getByPath('theme');
$arguments296['arguments'] = $array298;

$output291 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output291 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure300 = function() use ($renderingContext) {
return NULL;
};
$arguments299 = [];
$arguments299['section'] = NULL;
$arguments299['partial'] = NULL;
$arguments299['delegate'] = NULL;
$arguments299['renderable'] = NULL;
$arguments299['arguments'] = array (
);
$arguments299['optional'] = false;
$arguments299['default'] = NULL;
$arguments299['contentAs'] = NULL;
$arguments299['debug'] = true;
$arguments299['partial'] = 'DropIn/Navigation/MainAfter';
$arguments299['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output291 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output291 .= '
            </nav>
        ';
return $output291;
};
$arguments287 = [];
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = [];
$array289['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation');

$expression290 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments287['__thenClosure'] = $renderChildrenClosure288;

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output229 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure302 = function() use ($renderingContext) {
$output303 = '';

$output303 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure305 = function() use ($renderingContext) {
$output308 = '';

$output308 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure310 = function() use ($renderingContext) {
$output311 = '';

$output311 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure313 = function() use ($renderingContext) {
$output420 = '';

$output420 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure422 = function() use ($renderingContext) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments421 = [];

$output420 .= '';

$output420 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure424 = function() use ($renderingContext) {
$output425 = '';

$output425 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure427 = function() use ($renderingContext) {
return NULL;
};
$arguments426 = [];
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$arguments426['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array428 = [];
$array428['0'] = $renderingContext->getVariableProvider()->getByPath('item.active');

$expression429 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments426['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression429(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array428)
					),
					$renderingContext
				);
$arguments426['then'] = ' active';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure431 = function() use ($renderingContext) {
return NULL;
};
$arguments430 = [];
$arguments430['then'] = NULL;
$arguments430['else'] = NULL;
$arguments430['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array432 = [];
$array432['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression433 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments430['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression433(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array432)
					),
					$renderingContext
				);
$arguments430['then'] = ' dropdown dropdown-hover';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output425 .= '">
                            <a href="';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link')]);

$output425 .= '" id="nav-item-';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output425 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure435 = function() use ($renderingContext) {
return NULL;
};
$arguments434 = [];
$arguments434['then'] = NULL;
$arguments434['else'] = NULL;
$arguments434['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array436 = [];
$array436['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression437 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments434['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression437(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array436)
					),
					$renderingContext
				);
$arguments434['then'] = ' dropdown-toggle';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);

$output425 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure439 = function() use ($renderingContext) {
return NULL;
};
$arguments438 = [];
$arguments438['then'] = NULL;
$arguments438['else'] = NULL;
$arguments438['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array440 = [];
$array440['0'] = $renderingContext->getVariableProvider()->getByPath('item.target');

$expression441 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments438['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression441(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array440)
					),
					$renderingContext
				);
$output442 = '';

$output442 .= ' target="';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target')]);

$output442 .= '"';
$arguments438['then'] = $output442;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure444 = function() use ($renderingContext) {
return NULL;
};
$arguments443 = [];
$arguments443['then'] = NULL;
$arguments443['else'] = NULL;
$arguments443['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array445 = [];
$array445['0'] = $renderingContext->getVariableProvider()->getByPath('item.target');
$array445['1'] = ' == "_blank"';

$expression446 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments443['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression446(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array445)
					),
					$renderingContext
				);
$arguments443['then'] = ' rel="noopener noreferrer"';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output425 .= ' title="';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output425 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure448 = function() use ($renderingContext) {
return NULL;
};
$arguments447 = [];
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$arguments447['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array449 = [];
$array449['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression450 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments447['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression450(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array449)
					),
					$renderingContext
				);
$arguments447['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output425 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure452 = function() use ($renderingContext) {
$output455 = '';

$output455 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure457 = function() use ($renderingContext) {
return NULL;
};
$arguments456 = [];
$arguments456['icon'] = NULL;
$arguments456['height'] = NULL;
$arguments456['width'] = NULL;
$arguments456['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon');
$arguments456['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width');
$arguments456['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height');

$output455 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
                                    </span>
                                ';
return $output455;
};
$arguments451 = [];
$arguments451['then'] = NULL;
$arguments451['else'] = NULL;
$arguments451['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array453 = [];
$array453['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable');
$array453['1'] = ' && ';
$array453['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon');

$expression454 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments451['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression454(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array453)
					),
					$renderingContext
				);
$arguments451['__thenClosure'] = $renderChildrenClosure452;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output425 .= '
                                <span class="nav-link-text">';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure459 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments458 = [];
$arguments458['then'] = NULL;
$arguments458['else'] = NULL;
$arguments458['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array460 = [];
$array460['0'] = $renderingContext->getVariableProvider()->getByPath('item.current');

$expression461 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments458['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression461(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array460)
					),
					$renderingContext
				);
$arguments458['__thenClosure'] = $renderChildrenClosure459;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output425 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure463 = function() use ($renderingContext) {
$output466 = '';

$output466 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';

$output466 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output466 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure468 = function() use ($renderingContext) {
$output469 = '';

$output469 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure471 = function() use ($renderingContext) {
$output499 = '';

$output499 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure501 = function() use ($renderingContext) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments500 = [];

$output499 .= '';

$output499 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure503 = function() use ($renderingContext) {
$output504 = '';

$output504 .= '
                                                <li>
                                                    <a href="';

$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link')]);

$output504 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure506 = function() use ($renderingContext) {
return NULL;
};
$arguments505 = [];
$arguments505['then'] = NULL;
$arguments505['else'] = NULL;
$arguments505['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array507 = [];
$array507['0'] = $renderingContext->getVariableProvider()->getByPath('child.active');

$expression508 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments505['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression508(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array507)
					),
					$renderingContext
				);
$arguments505['then'] = ' active';

$output504 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output504 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure510 = function() use ($renderingContext) {
return NULL;
};
$arguments509 = [];
$arguments509['then'] = NULL;
$arguments509['else'] = NULL;
$arguments509['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array511 = [];
$array511['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');

$expression512 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments509['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression512(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array511)
					),
					$renderingContext
				);
$output513 = '';

$output513 .= ' target="';

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target')]);

$output513 .= '"';
$arguments509['then'] = $output513;

$output504 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure515 = function() use ($renderingContext) {
return NULL;
};
$arguments514 = [];
$arguments514['then'] = NULL;
$arguments514['else'] = NULL;
$arguments514['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array516 = [];
$array516['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');
$array516['1'] = ' == "_blank"';

$expression517 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments514['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression517(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array516)
					),
					$renderingContext
				);
$arguments514['then'] = ' rel="noopener noreferrer"';

$output504 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output504 .= ' title="';

$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output504 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure519 = function() use ($renderingContext) {
$output522 = '';

$output522 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure524 = function() use ($renderingContext) {
return NULL;
};
$arguments523 = [];
$arguments523['icon'] = NULL;
$arguments523['height'] = NULL;
$arguments523['width'] = NULL;
$arguments523['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon');
$arguments523['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width');
$arguments523['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height');

$output522 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext);

$output522 .= '
                                                            </span>
                                                        ';
return $output522;
};
$arguments518 = [];
$arguments518['then'] = NULL;
$arguments518['else'] = NULL;
$arguments518['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array520 = [];
$array520['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable');
$array520['1'] = ' && ';
$array520['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon');

$expression521 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments518['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression521(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array520)
					),
					$renderingContext
				);
$arguments518['__thenClosure'] = $renderChildrenClosure519;

$output504 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext);

$output504 .= '
                                                        <span class="dropdown-text">';

$output504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure526 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments525 = [];
$arguments525['then'] = NULL;
$arguments525['else'] = NULL;
$arguments525['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array527 = [];
$array527['0'] = $renderingContext->getVariableProvider()->getByPath('child.current');

$expression528 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments525['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression528(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array527)
					),
					$renderingContext
				);
$arguments525['__thenClosure'] = $renderChildrenClosure526;

$output504 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output504 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output504;
};
$arguments502 = [];
$arguments502['if'] = NULL;

$output499 .= '';

$output499 .= '
                                        ';
return $output499;
};
$arguments470 = [];
$arguments470['then'] = NULL;
$arguments470['else'] = NULL;
$arguments470['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array497 = [];
$array497['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer');

$expression498 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments470['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression498(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array497)
					),
					$renderingContext
				);
$arguments470['__thenClosure'] = function() use ($renderingContext) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments470['__elseClosures'][] = function() use ($renderingContext) {
$output472 = '';

$output472 .= '
                                                <li>
                                                    <a href="';

$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link')]);

$output472 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure474 = function() use ($renderingContext) {
return NULL;
};
$arguments473 = [];
$arguments473['then'] = NULL;
$arguments473['else'] = NULL;
$arguments473['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array475 = [];
$array475['0'] = $renderingContext->getVariableProvider()->getByPath('child.active');

$expression476 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments473['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array475)
					),
					$renderingContext
				);
$arguments473['then'] = ' active';

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output472 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure478 = function() use ($renderingContext) {
return NULL;
};
$arguments477 = [];
$arguments477['then'] = NULL;
$arguments477['else'] = NULL;
$arguments477['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array479 = [];
$array479['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');

$expression480 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments477['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression480(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array479)
					),
					$renderingContext
				);
$output481 = '';

$output481 .= ' target="';

$output481 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target')]);

$output481 .= '"';
$arguments477['then'] = $output481;

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure483 = function() use ($renderingContext) {
return NULL;
};
$arguments482 = [];
$arguments482['then'] = NULL;
$arguments482['else'] = NULL;
$arguments482['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array484 = [];
$array484['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');
$array484['1'] = ' == "_blank"';

$expression485 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments482['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression485(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array484)
					),
					$renderingContext
				);
$arguments482['then'] = ' rel="noopener noreferrer"';

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output472 .= ' title="';

$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output472 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure487 = function() use ($renderingContext) {
$output490 = '';

$output490 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure492 = function() use ($renderingContext) {
return NULL;
};
$arguments491 = [];
$arguments491['icon'] = NULL;
$arguments491['height'] = NULL;
$arguments491['width'] = NULL;
$arguments491['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon');
$arguments491['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width');
$arguments491['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height');

$output490 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output490 .= '
                                                            </span>
                                                        ';
return $output490;
};
$arguments486 = [];
$arguments486['then'] = NULL;
$arguments486['else'] = NULL;
$arguments486['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array488 = [];
$array488['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable');
$array488['1'] = ' && ';
$array488['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon');

$expression489 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments486['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression489(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array488)
					),
					$renderingContext
				);
$arguments486['__thenClosure'] = $renderChildrenClosure487;

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output472 .= '
                                                        <span class="dropdown-text">';

$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure494 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments493 = [];
$arguments493['then'] = NULL;
$arguments493['else'] = NULL;
$arguments493['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array495 = [];
$array495['0'] = $renderingContext->getVariableProvider()->getByPath('child.current');

$expression496 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments493['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression496(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array495)
					),
					$renderingContext
				);
$arguments493['__thenClosure'] = $renderChildrenClosure494;

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);

$output472 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output472;
};

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
                                    ';
return $output469;
};
$arguments467 = [];
$arguments467['each'] = NULL;
$arguments467['as'] = NULL;
$arguments467['key'] = NULL;
$arguments467['reverse'] = false;
$arguments467['iteration'] = NULL;
$arguments467['each'] = $renderingContext->getVariableProvider()->getByPath('item.children');
$arguments467['as'] = 'child';

$output466 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);

$output466 .= '
                                </ul>
                            ';
return $output466;
};
$arguments462 = [];
$arguments462['then'] = NULL;
$arguments462['else'] = NULL;
$arguments462['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array464 = [];
$array464['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression465 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments462['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression465(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array464)
					),
					$renderingContext
				);
$arguments462['__thenClosure'] = $renderChildrenClosure463;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output425 .= '
                        </li>
                        
                    ';
return $output425;
};
$arguments423 = [];
$arguments423['if'] = NULL;

$output420 .= '';

$output420 .= '
                ';
return $output420;
};
$arguments312 = [];
$arguments312['then'] = NULL;
$arguments312['else'] = NULL;
$arguments312['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array418 = [];
$array418['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer');

$expression419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments312['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array418)
					),
					$renderingContext
				);
$arguments312['__thenClosure'] = function() use ($renderingContext) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments312['__elseClosures'][] = function() use ($renderingContext) {
$output314 = '';

$output314 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext) {
return NULL;
};
$arguments315 = [];
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array317 = [];
$array317['0'] = $renderingContext->getVariableProvider()->getByPath('item.active');

$expression318 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression318(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);
$arguments315['then'] = ' active';

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure320 = function() use ($renderingContext) {
return NULL;
};
$arguments319 = [];
$arguments319['then'] = NULL;
$arguments319['else'] = NULL;
$arguments319['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array321 = [];
$array321['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression322 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments319['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression322(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array321)
					),
					$renderingContext
				);
$arguments319['then'] = ' dropdown dropdown-hover';

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output314 .= '">
                            <a href="';

$output314 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link')]);

$output314 .= '" id="nav-item-';

$output314 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output314 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure324 = function() use ($renderingContext) {
return NULL;
};
$arguments323 = [];
$arguments323['then'] = NULL;
$arguments323['else'] = NULL;
$arguments323['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array325 = [];
$array325['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression326 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments323['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression326(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array325)
					),
					$renderingContext
				);
$arguments323['then'] = ' dropdown-toggle';

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output314 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure328 = function() use ($renderingContext) {
return NULL;
};
$arguments327 = [];
$arguments327['then'] = NULL;
$arguments327['else'] = NULL;
$arguments327['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array329 = [];
$array329['0'] = $renderingContext->getVariableProvider()->getByPath('item.target');

$expression330 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments327['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression330(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array329)
					),
					$renderingContext
				);
$output331 = '';

$output331 .= ' target="';

$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target')]);

$output331 .= '"';
$arguments327['then'] = $output331;

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure333 = function() use ($renderingContext) {
return NULL;
};
$arguments332 = [];
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$arguments332['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = [];
$array334['0'] = $renderingContext->getVariableProvider()->getByPath('item.target');
$array334['1'] = ' == "_blank"';

$expression335 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments332['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression335(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments332['then'] = ' rel="noopener noreferrer"';

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output314 .= ' title="';

$output314 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output314 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure337 = function() use ($renderingContext) {
return NULL;
};
$arguments336 = [];
$arguments336['then'] = NULL;
$arguments336['else'] = NULL;
$arguments336['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array338 = [];
$array338['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression339 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments336['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array338)
					),
					$renderingContext
				);
$arguments336['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output314 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure341 = function() use ($renderingContext) {
$output344 = '';

$output344 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure346 = function() use ($renderingContext) {
return NULL;
};
$arguments345 = [];
$arguments345['icon'] = NULL;
$arguments345['height'] = NULL;
$arguments345['width'] = NULL;
$arguments345['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon');
$arguments345['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width');
$arguments345['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height');

$output344 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
                                    </span>
                                ';
return $output344;
};
$arguments340 = [];
$arguments340['then'] = NULL;
$arguments340['else'] = NULL;
$arguments340['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array342 = [];
$array342['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable');
$array342['1'] = ' && ';
$array342['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon');

$expression343 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments340['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression343(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);
$arguments340['__thenClosure'] = $renderChildrenClosure341;

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output314 .= '
                                <span class="nav-link-text">';

$output314 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure348 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments347 = [];
$arguments347['then'] = NULL;
$arguments347['else'] = NULL;
$arguments347['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array349 = [];
$array349['0'] = $renderingContext->getVariableProvider()->getByPath('item.current');

$expression350 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments347['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression350(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array349)
					),
					$renderingContext
				);
$arguments347['__thenClosure'] = $renderChildrenClosure348;

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output314 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure352 = function() use ($renderingContext) {
$output355 = '';

$output355 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';

$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output355 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure357 = function() use ($renderingContext) {
$output358 = '';

$output358 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure360 = function() use ($renderingContext) {
$output388 = '';

$output388 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure390 = function() use ($renderingContext) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments389 = [];

$output388 .= '';

$output388 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure392 = function() use ($renderingContext) {
$output393 = '';

$output393 .= '
                                                <li>
                                                    <a href="';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link')]);

$output393 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure395 = function() use ($renderingContext) {
return NULL;
};
$arguments394 = [];
$arguments394['then'] = NULL;
$arguments394['else'] = NULL;
$arguments394['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array396 = [];
$array396['0'] = $renderingContext->getVariableProvider()->getByPath('child.active');

$expression397 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments394['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression397(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array396)
					),
					$renderingContext
				);
$arguments394['then'] = ' active';

$output393 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output393 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure399 = function() use ($renderingContext) {
return NULL;
};
$arguments398 = [];
$arguments398['then'] = NULL;
$arguments398['else'] = NULL;
$arguments398['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array400 = [];
$array400['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');

$expression401 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments398['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression401(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array400)
					),
					$renderingContext
				);
$output402 = '';

$output402 .= ' target="';

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target')]);

$output402 .= '"';
$arguments398['then'] = $output402;

$output393 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure404 = function() use ($renderingContext) {
return NULL;
};
$arguments403 = [];
$arguments403['then'] = NULL;
$arguments403['else'] = NULL;
$arguments403['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array405 = [];
$array405['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');
$array405['1'] = ' == "_blank"';

$expression406 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments403['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression406(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array405)
					),
					$renderingContext
				);
$arguments403['then'] = ' rel="noopener noreferrer"';

$output393 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);

$output393 .= ' title="';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output393 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure408 = function() use ($renderingContext) {
$output411 = '';

$output411 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure413 = function() use ($renderingContext) {
return NULL;
};
$arguments412 = [];
$arguments412['icon'] = NULL;
$arguments412['height'] = NULL;
$arguments412['width'] = NULL;
$arguments412['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon');
$arguments412['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width');
$arguments412['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height');

$output411 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output411 .= '
                                                            </span>
                                                        ';
return $output411;
};
$arguments407 = [];
$arguments407['then'] = NULL;
$arguments407['else'] = NULL;
$arguments407['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array409 = [];
$array409['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable');
$array409['1'] = ' && ';
$array409['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon');

$expression410 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments407['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression410(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array409)
					),
					$renderingContext
				);
$arguments407['__thenClosure'] = $renderChildrenClosure408;

$output393 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext);

$output393 .= '
                                                        <span class="dropdown-text">';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure415 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments414 = [];
$arguments414['then'] = NULL;
$arguments414['else'] = NULL;
$arguments414['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array416 = [];
$array416['0'] = $renderingContext->getVariableProvider()->getByPath('child.current');

$expression417 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments414['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression417(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array416)
					),
					$renderingContext
				);
$arguments414['__thenClosure'] = $renderChildrenClosure415;

$output393 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output393 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output393;
};
$arguments391 = [];
$arguments391['if'] = NULL;

$output388 .= '';

$output388 .= '
                                        ';
return $output388;
};
$arguments359 = [];
$arguments359['then'] = NULL;
$arguments359['else'] = NULL;
$arguments359['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array386 = [];
$array386['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer');

$expression387 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments359['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression387(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array386)
					),
					$renderingContext
				);
$arguments359['__thenClosure'] = function() use ($renderingContext) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments359['__elseClosures'][] = function() use ($renderingContext) {
$output361 = '';

$output361 .= '
                                                <li>
                                                    <a href="';

$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link')]);

$output361 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure363 = function() use ($renderingContext) {
return NULL;
};
$arguments362 = [];
$arguments362['then'] = NULL;
$arguments362['else'] = NULL;
$arguments362['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array364 = [];
$array364['0'] = $renderingContext->getVariableProvider()->getByPath('child.active');

$expression365 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments362['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression365(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array364)
					),
					$renderingContext
				);
$arguments362['then'] = ' active';

$output361 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output361 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext) {
return NULL;
};
$arguments366 = [];
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = [];
$array368['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');

$expression369 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression369(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$output370 = '';

$output370 .= ' target="';

$output370 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target')]);

$output370 .= '"';
$arguments366['then'] = $output370;

$output361 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure372 = function() use ($renderingContext) {
return NULL;
};
$arguments371 = [];
$arguments371['then'] = NULL;
$arguments371['else'] = NULL;
$arguments371['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array373 = [];
$array373['0'] = $renderingContext->getVariableProvider()->getByPath('child.target');
$array373['1'] = ' == "_blank"';

$expression374 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments371['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression374(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array373)
					),
					$renderingContext
				);
$arguments371['then'] = ' rel="noopener noreferrer"';

$output361 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output361 .= ' title="';

$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output361 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure376 = function() use ($renderingContext) {
$output379 = '';

$output379 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure381 = function() use ($renderingContext) {
return NULL;
};
$arguments380 = [];
$arguments380['icon'] = NULL;
$arguments380['height'] = NULL;
$arguments380['width'] = NULL;
$arguments380['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon');
$arguments380['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width');
$arguments380['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height');

$output379 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output379 .= '
                                                            </span>
                                                        ';
return $output379;
};
$arguments375 = [];
$arguments375['then'] = NULL;
$arguments375['else'] = NULL;
$arguments375['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array377 = [];
$array377['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable');
$array377['1'] = ' && ';
$array377['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon');

$expression378 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments375['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression378(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array377)
					),
					$renderingContext
				);
$arguments375['__thenClosure'] = $renderChildrenClosure376;

$output361 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output361 .= '
                                                        <span class="dropdown-text">';

$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure383 = function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments382 = [];
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$arguments382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array384 = [];
$array384['0'] = $renderingContext->getVariableProvider()->getByPath('child.current');

$expression385 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression385(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array384)
					),
					$renderingContext
				);
$arguments382['__thenClosure'] = $renderChildrenClosure383;

$output361 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output361 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output361;
};

$output358 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output358 .= '
                                    ';
return $output358;
};
$arguments356 = [];
$arguments356['each'] = NULL;
$arguments356['as'] = NULL;
$arguments356['key'] = NULL;
$arguments356['reverse'] = false;
$arguments356['iteration'] = NULL;
$arguments356['each'] = $renderingContext->getVariableProvider()->getByPath('item.children');
$arguments356['as'] = 'child';

$output355 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output355 .= '
                                </ul>
                            ';
return $output355;
};
$arguments351 = [];
$arguments351['then'] = NULL;
$arguments351['else'] = NULL;
$arguments351['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array353 = [];
$array353['0'] = $renderingContext->getVariableProvider()->getByPath('item.children');

$expression354 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments351['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression354(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array353)
					),
					$renderingContext
				);
$arguments351['__thenClosure'] = $renderChildrenClosure352;

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output314 .= '
                        </li>
                        
                    ';
return $output314;
};

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
            ';
return $output311;
};
$arguments309 = [];
$arguments309['each'] = NULL;
$arguments309['as'] = NULL;
$arguments309['key'] = NULL;
$arguments309['reverse'] = false;
$arguments309['iteration'] = NULL;
$arguments309['each'] = $renderingContext->getVariableProvider()->getByPath('menu');
$arguments309['as'] = 'item';

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
            

            <!-- Search Button -->
           <li>

               <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
               <div class="south-search-form">
                 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure530 = function() use ($renderingContext) {
return NULL;
};
$arguments529 = [];
$arguments529['data'] = NULL;
$arguments529['typoscriptObjectPath'] = NULL;
$arguments529['currentValueKey'] = NULL;
$arguments529['table'] = '';
$arguments529['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array531 = [];
$array531['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid');
$array531['colPos'] = 3;
$arguments529['data'] = $array531;
$renderChildrenClosure530 = ($arguments529['data'] !== null) ? function() use ($arguments529) { return $arguments529['data']; } : $renderChildrenClosure530;
$output308 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output308 .= '
              </div>
           </li>
        </ul>
    ';
return $output308;
};
$arguments304 = [];
$arguments304['then'] = NULL;
$arguments304['else'] = NULL;
$arguments304['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array306 = [];
$array306['0'] = $renderingContext->getVariableProvider()->getByPath('menu');

$expression307 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments304['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression307(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array306)
					),
					$renderingContext
				);
$arguments304['__thenClosure'] = $renderChildrenClosure305;

$output303 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output303 .= '
';
return $output303;
};
$arguments301 = [];
$arguments301['name'] = NULL;
$arguments301['name'] = 'MainNavigation';

$output229 .= '';

$output229 .= '


';

return $output229;
}


}
#