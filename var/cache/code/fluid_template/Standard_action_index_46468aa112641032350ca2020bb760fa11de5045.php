<?php

class Standard_action_index_46468aa112641032350ca2020bb760fa11de5045 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
        <table class="table table-condensed table-hover news-table">
            <thead>
            <tr>
                <th colspan="2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('header');
};
$arguments43 = [];
$arguments43['value'] = NULL;

$output42 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output42 .= '</th>
            </tr>
            </thead>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                <tfoot class="setting-switcher">
                <tr>
                    <td colspan="2">
                        <a href="#" data-identifier="newscollapse-';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output49 .= '">
                            <span class="down">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};
$arguments50 = [];
$arguments50['identifier'] = NULL;
$arguments50['size'] = 'small';
$arguments50['overlay'] = NULL;
$arguments50['state'] = 'default';
$arguments50['alternativeMarkupIdentifier'] = NULL;
$arguments50['identifier'] = 'actions-move-down';

$output49 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '</span>
                            <span class="up">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};
$arguments52 = [];
$arguments52['identifier'] = NULL;
$arguments52['size'] = 'small';
$arguments52['overlay'] = NULL;
$arguments52['state'] = 'default';
$arguments52['alternativeMarkupIdentifier'] = NULL;
$arguments52['identifier'] = 'actions-move-up';

$output49 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output49 .= '</span>
                            Toggle settings
                        </a>
                    </td>
                </tr>
                </tfoot>
            ';
return $output49;
};
$arguments45 = [];
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = [];
$array47['0'] = $renderingContext->getVariableProvider()->getByPath('rows.below');

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['__thenClosure'] = $renderChildrenClosure46;

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
            <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
$output56 = '';

$output56 .= '
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.0');
};
$arguments57 = [];
$arguments57['value'] = NULL;

$output56 .= isset($arguments57['value']) ? $arguments57['value'] : $renderChildrenClosure58();

$output56 .= '</th>
                    <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.1');
};
$arguments59 = [];
$arguments59['value'] = NULL;

$output56 .= isset($arguments59['value']) ? $arguments59['value'] : $renderChildrenClosure60();

$output56 .= '</td>
                </tr>
            ';
return $output56;
};
$arguments54 = [];
$arguments54['each'] = NULL;
$arguments54['as'] = NULL;
$arguments54['key'] = NULL;
$arguments54['reverse'] = false;
$arguments54['iteration'] = NULL;
$arguments54['each'] = $renderingContext->getVariableProvider()->getByPath('rows.above');
$arguments54['as'] = 'item';

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output42 .= '
            </tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output65 = '';

$output65 .= '
                <tbody class="hidden-settings hidden" id="newscollapse-';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output65 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
$output68 = '';

$output68 .= '
                    <tr>
                        <th>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.0');
};
$arguments69 = [];
$arguments69['value'] = NULL;

$output68 .= isset($arguments69['value']) ? $arguments69['value'] : $renderChildrenClosure70();

$output68 .= '</th>
                        <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.1');
};
$arguments71 = [];
$arguments71['value'] = NULL;

$output68 .= isset($arguments71['value']) ? $arguments71['value'] : $renderChildrenClosure72();

$output68 .= '</td>
                    </tr>
                ';
return $output68;
};
$arguments66 = [];
$arguments66['each'] = NULL;
$arguments66['as'] = NULL;
$arguments66['key'] = NULL;
$arguments66['reverse'] = false;
$arguments66['iteration'] = NULL;
$arguments66['each'] = $renderingContext->getVariableProvider()->getByPath('rows.below');
$arguments66['as'] = 'item';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                </tbody>
            ';
return $output65;
};
$arguments61 = [];
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = [];
$array63['0'] = $renderingContext->getVariableProvider()->getByPath('rows.below');

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = $renderChildrenClosure62;

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output42 .= '
        </table>
    ';
return $output42;
};
$arguments40 = [];

$output39 .= '';

$output39 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
$output75 = '';

$output75 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('header');
};
$arguments76 = [];
$arguments76['value'] = NULL;

$output75 .= isset($arguments76['value']) ? $arguments76['value'] : $renderChildrenClosure77();

$output75 .= '
    ';
return $output75;
};
$arguments73 = [];
$arguments73['if'] = NULL;

$output39 .= '';

$output39 .= '
';
return $output39;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = [];
$array37['0'] = $renderingContext->getVariableProvider()->getByPath('rows.above');

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        <table class="table table-condensed table-hover news-table">
            <thead>
            <tr>
                <th colspan="2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('header');
};
$arguments4 = [];
$arguments4['value'] = NULL;

$output3 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output3 .= '</th>
            </tr>
            </thead>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                <tfoot class="setting-switcher">
                <tr>
                    <td colspan="2">
                        <a href="#" data-identifier="newscollapse-';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output10 .= '">
                            <span class="down">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};
$arguments11 = [];
$arguments11['identifier'] = NULL;
$arguments11['size'] = 'small';
$arguments11['overlay'] = NULL;
$arguments11['state'] = 'default';
$arguments11['alternativeMarkupIdentifier'] = NULL;
$arguments11['identifier'] = 'actions-move-down';

$output10 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '</span>
                            <span class="up">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};
$arguments13 = [];
$arguments13['identifier'] = NULL;
$arguments13['size'] = 'small';
$arguments13['overlay'] = NULL;
$arguments13['state'] = 'default';
$arguments13['alternativeMarkupIdentifier'] = NULL;
$arguments13['identifier'] = 'actions-move-up';

$output10 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '</span>
                            Toggle settings
                        </a>
                    </td>
                </tr>
                </tfoot>
            ';
return $output10;
};
$arguments6 = [];
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = [];
$array8['0'] = $renderingContext->getVariableProvider()->getByPath('rows.below');

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = $renderChildrenClosure7;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
            <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.0');
};
$arguments18 = [];
$arguments18['value'] = NULL;

$output17 .= isset($arguments18['value']) ? $arguments18['value'] : $renderChildrenClosure19();

$output17 .= '</th>
                    <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.1');
};
$arguments20 = [];
$arguments20['value'] = NULL;

$output17 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output17 .= '</td>
                </tr>
            ';
return $output17;
};
$arguments15 = [];
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('rows.above');
$arguments15['as'] = 'item';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output3 .= '
            </tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
$output26 = '';

$output26 .= '
                <tbody class="hidden-settings hidden" id="newscollapse-';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output26 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
$output29 = '';

$output29 .= '
                    <tr>
                        <th>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.0');
};
$arguments30 = [];
$arguments30['value'] = NULL;

$output29 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output29 .= '</th>
                        <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.1');
};
$arguments32 = [];
$arguments32['value'] = NULL;

$output29 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output29 .= '</td>
                    </tr>
                ';
return $output29;
};
$arguments27 = [];
$arguments27['each'] = NULL;
$arguments27['as'] = NULL;
$arguments27['key'] = NULL;
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
$arguments27['each'] = $renderingContext->getVariableProvider()->getByPath('rows.below');
$arguments27['as'] = 'item';

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                </tbody>
            ';
return $output26;
};
$arguments22 = [];
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = [];
$array24['0'] = $renderingContext->getVariableProvider()->getByPath('rows.below');

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output3 .= '
        </table>
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext) {
$output34 = '';

$output34 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('header');
};
$arguments35 = [];
$arguments35['value'] = NULL;

$output34 .= isset($arguments35['value']) ? $arguments35['value'] : $renderChildrenClosure36();

$output34 .= '
    ';
return $output34;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#