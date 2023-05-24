<?php

class Standard_action_index_75b18ddb944aba7556a7437b79887f4bb17b39c3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Module
 */
public function section_b8ff02892916ff59f7fbd4e617fccd01f6bca576(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('iteration.index');
};
$arguments4 = [];
$arguments4['value'] = NULL;
$arguments4['name'] = NULL;
$arguments4['name'] = 'uid';
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};
$arguments8 = [];
$arguments8['identifier'] = NULL;
$arguments8['size'] = 'small';
$arguments8['overlay'] = NULL;
$arguments8['state'] = 'default';
$arguments8['alternativeMarkupIdentifier'] = NULL;
$arguments8['identifier'] = $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier');
$arguments8['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
};
$arguments6 = [];
$arguments6['value'] = NULL;
$arguments6['name'] = NULL;
$arguments6['name'] = 'icon';
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.label');
};
$arguments10 = [];
$arguments10['value'] = NULL;
$arguments10['name'] = NULL;
$arguments10['name'] = 'label';
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.shortInfo');
};
$arguments12 = [];
$arguments12['value'] = NULL;
$arguments12['name'] = NULL;
$arguments12['name'] = 'information';
$renderChildrenClosure13 = ($arguments12['value'] !== null) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};
$arguments14 = [];
$arguments14['section'] = NULL;
$arguments14['partial'] = NULL;
$arguments14['delegate'] = NULL;
$arguments14['renderable'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['optional'] = false;
$arguments14['default'] = NULL;
$arguments14['contentAs'] = NULL;
$arguments14['debug'] = true;
$arguments14['partial'] = 'Modules/Item';
// Rendering Array
$array16 = [];
$array16['module'] = $renderingContext->getVariableProvider()->getByPath('module');
$array16['uid'] = $renderingContext->getVariableProvider()->getByPath('uid');
$array16['icon'] = $renderingContext->getVariableProvider()->getByPath('icon');
$array16['label'] = $renderingContext->getVariableProvider()->getByPath('label');
$array16['information'] = $renderingContext->getVariableProvider()->getByPath('information');
$array16['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array16['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');
$arguments14['arguments'] = $array16;
// Rendering Boolean node
// Rendering Array
$array17 = [];
$array17['0'] = 'false';

$expression18 = function($context) {return FALSE;};
$arguments14['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1 = [];
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('parentModules');
$arguments1['as'] = 'module';
$arguments1['iteration'] = 'iteration';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return 'hook';
};
$arguments24 = [];
$arguments24['value'] = NULL;
$arguments24['name'] = NULL;
$arguments24['name'] = 'uid';
$renderChildrenClosure25 = ($arguments24['value'] !== null) ? function() use ($arguments24) { return $arguments24['value']; } : $renderChildrenClosure25;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output23 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};
$arguments28 = [];
$arguments28['identifier'] = NULL;
$arguments28['size'] = 'small';
$arguments28['overlay'] = NULL;
$arguments28['state'] = 'default';
$arguments28['alternativeMarkupIdentifier'] = NULL;
$arguments28['identifier'] = 'actions-window-open';
$arguments28['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);
};
$arguments26 = [];
$arguments26['value'] = NULL;
$arguments26['name'] = NULL;
$arguments26['name'] = 'icon';
$renderChildrenClosure27 = ($arguments26['value'] !== null) ? function() use ($arguments26) { return $arguments26['value']; } : $renderChildrenClosure27;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output23 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};
$arguments32 = [];
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['languageKey'] = NULL;
$arguments32['alternativeLanguageKeys'] = NULL;
$arguments32['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:deprecatedModuleLabel';
$arguments32['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
};
$arguments30 = [];
$arguments30['value'] = NULL;
$arguments30['name'] = NULL;
$arguments30['name'] = 'label';
$renderChildrenClosure31 = ($arguments30['value'] !== null) ? function() use ($arguments30) { return $arguments30['value']; } : $renderChildrenClosure31;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output23 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent');
};
$arguments34 = [];
$arguments34['value'] = NULL;
$arguments34['name'] = NULL;
$arguments34['name'] = 'mainContent';
$renderChildrenClosure35 = ($arguments34['value'] !== null) ? function() use ($arguments34) { return $arguments34['value']; } : $renderChildrenClosure35;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output23 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};
$arguments36 = [];
$arguments36['section'] = NULL;
$arguments36['partial'] = NULL;
$arguments36['delegate'] = NULL;
$arguments36['renderable'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$arguments36['default'] = NULL;
$arguments36['contentAs'] = NULL;
$arguments36['debug'] = true;
$arguments36['partial'] = 'Modules/Item';
$output38 = '';
// Rendering Array
$array39 = [];
$array39['uid'] = $renderingContext->getVariableProvider()->getByPath('uid');
$array39['icon'] = $renderingContext->getVariableProvider()->getByPath('icon');
$array39['label'] = $renderingContext->getVariableProvider()->getByPath('label');
$array39['mainContent'] = $renderingContext->getVariableProvider()->getByPath('mainContent');
$array39['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array39['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');

$output38 .= $array39;

$output38 .= '}';
$arguments36['arguments'] = $output38;
// Rendering Boolean node
// Rendering Array
$array40 = [];
$array40['0'] = 'false';

$expression41 = function($context) {return FALSE;};
$arguments36['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output23 .= '
    ';
return $output23;
};
$arguments19 = [];
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = [];
$array21['0'] = $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent');

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = $renderChildrenClosure20;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Settings
 */
public function section_c7f73bb54d928922c3838bb789ee9fb8a5b1eb37(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output42 = '';

$output42 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return 'settings';
};
$arguments43 = [];
$arguments43['value'] = NULL;
$arguments43['name'] = NULL;
$arguments43['name'] = 'uid';
$renderChildrenClosure44 = ($arguments43['value'] !== null) ? function() use ($arguments43) { return $arguments43['value']; } : $renderChildrenClosure44;
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};
$arguments47 = [];
$arguments47['identifier'] = NULL;
$arguments47['size'] = 'small';
$arguments47['overlay'] = NULL;
$arguments47['state'] = 'default';
$arguments47['alternativeMarkupIdentifier'] = NULL;
$arguments47['identifier'] = 'actions-system-extension-configure';
$arguments47['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);
};
$arguments45 = [];
$arguments45['value'] = NULL;
$arguments45['name'] = NULL;
$arguments45['name'] = 'icon';
$renderChildrenClosure46 = ($arguments45['value'] !== null) ? function() use ($arguments45) { return $arguments45['value']; } : $renderChildrenClosure46;
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output42 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};
$arguments51 = [];
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['languageKey'] = NULL;
$arguments51['alternativeLanguageKeys'] = NULL;
$arguments51['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label';
$arguments51['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);
};
$arguments49 = [];
$arguments49['value'] = NULL;
$arguments49['name'] = NULL;
$arguments49['name'] = 'label';
$renderChildrenClosure50 = ($arguments49['value'] !== null) ? function() use ($arguments49) { return $arguments49['value']; } : $renderChildrenClosure50;
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output42 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.shortInfo');
};
$arguments53 = [];
$arguments53['value'] = NULL;
$arguments53['name'] = NULL;
$arguments53['name'] = 'information';
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output42 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
$output57 = '';

$output57 .= '
        <h1 class="typo3-adminPanel-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};
$arguments58 = [];
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label';
$arguments58['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '</h1>
        <div class="typo3-adminPanel-card-group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
$output62 = '';

$output62 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
$output67 = '';

$output67 .= '
                    <div class="typo3-adminPanel-card">
                        <div class="typo3-adminPanel-card-header">
                            <h2 class="typo3-adminPanel-card-header-headline">
                                <span class="typo3-adminPanel-card-header-icon">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};
$arguments68 = [];
$arguments68['identifier'] = NULL;
$arguments68['size'] = 'small';
$arguments68['overlay'] = NULL;
$arguments68['state'] = 'default';
$arguments68['alternativeMarkupIdentifier'] = NULL;
$arguments68['identifier'] = $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier');
$arguments68['alternativeMarkupIdentifier'] = 'inline';

$output67 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '</span>
                                <span class="typo3-adminPanel-card-header-text">';

$output67 .= $renderingContext->getVariableProvider()->getByPath('module.label');

$output67 .= '</span>
                            </h2>
                        </div>
                        <div class="typo3-adminPanel-card-body">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.pageSettings');
};
$arguments70 = [];
$arguments70['value'] = NULL;

$output67 .= isset($arguments70['value']) ? $arguments70['value'] : $renderChildrenClosure71();

$output67 .= '</div>
                    </div>
                ';
return $output67;
};
$arguments63 = [];
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = [];
$array65['0'] = $renderingContext->getVariableProvider()->getByPath('module.pageSettings');

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments63['__thenClosure'] = $renderChildrenClosure64;

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
            ';
return $output62;
};
$arguments60 = [];
$arguments60['each'] = NULL;
$arguments60['as'] = NULL;
$arguments60['key'] = NULL;
$arguments60['reverse'] = false;
$arguments60['iteration'] = NULL;
$arguments60['each'] = $renderingContext->getVariableProvider()->getByPath('settingsModules');
$arguments60['as'] = 'module';

$output57 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output57 .= '
        </div>
        <div class="typo3-adminPanel-form-group">
            <button data-typo3-role="typo3-adminPanel-saveButton" class="typo3-adminPanel-btn typo3-adminPanel-btn-primary">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};
$arguments72 = [];
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$arguments72['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.updateButtonLabel';
$arguments72['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output57 .= '
            </button>
        </div>
    ';
return $output57;
};
$arguments55 = [];
$arguments55['value'] = NULL;
$arguments55['name'] = NULL;
$arguments55['name'] = 'mainContent';
$renderChildrenClosure56 = ($arguments55['value'] !== null) ? function() use ($arguments55) { return $arguments55['value']; } : $renderChildrenClosure56;
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output42 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};
$arguments74 = [];
$arguments74['section'] = NULL;
$arguments74['partial'] = NULL;
$arguments74['delegate'] = NULL;
$arguments74['renderable'] = NULL;
$arguments74['arguments'] = array (
);
$arguments74['optional'] = false;
$arguments74['default'] = NULL;
$arguments74['contentAs'] = NULL;
$arguments74['debug'] = true;
$arguments74['partial'] = 'Modules/Item';
// Rendering Array
$array76 = [];
$array76['uid'] = $renderingContext->getVariableProvider()->getByPath('uid');
$array76['icon'] = $renderingContext->getVariableProvider()->getByPath('icon');
$array76['label'] = $renderingContext->getVariableProvider()->getByPath('label');
$array76['information'] = $renderingContext->getVariableProvider()->getByPath('information');
$array76['mainContent'] = $renderingContext->getVariableProvider()->getByPath('mainContent');
$array76['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array76['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');
$arguments74['arguments'] = $array76;
// Rendering Boolean node
// Rendering Array
$array77 = [];
$array77['0'] = 'false';

$expression78 = function($context) {return FALSE;};
$arguments74['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output42 .= '
';

return $output42;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output79 = '';

$output79 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return NULL;
};
$arguments80 = [];
$arguments80['name'] = NULL;
$arguments80['name'] = 'Default';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output79 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
$output84 = '';

$output84 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
$output87 = '';

$output87 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('iteration.index');
};
$arguments88 = [];
$arguments88['value'] = NULL;
$arguments88['name'] = NULL;
$arguments88['name'] = 'uid';
$renderChildrenClosure89 = ($arguments88['value'] !== null) ? function() use ($arguments88) { return $arguments88['value']; } : $renderChildrenClosure89;
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output87 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure93 = function() use ($renderingContext) {
return NULL;
};
$arguments92 = [];
$arguments92['identifier'] = NULL;
$arguments92['size'] = 'small';
$arguments92['overlay'] = NULL;
$arguments92['state'] = 'default';
$arguments92['alternativeMarkupIdentifier'] = NULL;
$arguments92['identifier'] = $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier');
$arguments92['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
};
$arguments90 = [];
$arguments90['value'] = NULL;
$arguments90['name'] = NULL;
$arguments90['name'] = 'icon';
$renderChildrenClosure91 = ($arguments90['value'] !== null) ? function() use ($arguments90) { return $arguments90['value']; } : $renderChildrenClosure91;
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output87 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure95 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.label');
};
$arguments94 = [];
$arguments94['value'] = NULL;
$arguments94['name'] = NULL;
$arguments94['name'] = 'label';
$renderChildrenClosure95 = ($arguments94['value'] !== null) ? function() use ($arguments94) { return $arguments94['value']; } : $renderChildrenClosure95;
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output87 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.shortInfo');
};
$arguments96 = [];
$arguments96['value'] = NULL;
$arguments96['name'] = NULL;
$arguments96['name'] = 'information';
$renderChildrenClosure97 = ($arguments96['value'] !== null) ? function() use ($arguments96) { return $arguments96['value']; } : $renderChildrenClosure97;
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext)]);

$output87 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure99 = function() use ($renderingContext) {
return NULL;
};
$arguments98 = [];
$arguments98['section'] = NULL;
$arguments98['partial'] = NULL;
$arguments98['delegate'] = NULL;
$arguments98['renderable'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['optional'] = false;
$arguments98['default'] = NULL;
$arguments98['contentAs'] = NULL;
$arguments98['debug'] = true;
$arguments98['partial'] = 'Modules/Item';
// Rendering Array
$array100 = [];
$array100['module'] = $renderingContext->getVariableProvider()->getByPath('module');
$array100['uid'] = $renderingContext->getVariableProvider()->getByPath('uid');
$array100['icon'] = $renderingContext->getVariableProvider()->getByPath('icon');
$array100['label'] = $renderingContext->getVariableProvider()->getByPath('label');
$array100['information'] = $renderingContext->getVariableProvider()->getByPath('information');
$array100['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array100['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');
$arguments98['arguments'] = $array100;
// Rendering Boolean node
// Rendering Array
$array101 = [];
$array101['0'] = 'false';

$expression102 = function($context) {return FALSE;};
$arguments98['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output87 .= '
    ';
return $output87;
};
$arguments85 = [];
$arguments85['each'] = NULL;
$arguments85['as'] = NULL;
$arguments85['key'] = NULL;
$arguments85['reverse'] = false;
$arguments85['iteration'] = NULL;
$arguments85['each'] = $renderingContext->getVariableProvider()->getByPath('parentModules');
$arguments85['as'] = 'module';
$arguments85['iteration'] = 'iteration';

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
$output107 = '';

$output107 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return 'hook';
};
$arguments108 = [];
$arguments108['value'] = NULL;
$arguments108['name'] = NULL;
$arguments108['name'] = 'uid';
$renderChildrenClosure109 = ($arguments108['value'] !== null) ? function() use ($arguments108) { return $arguments108['value']; } : $renderChildrenClosure109;
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output107 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure113 = function() use ($renderingContext) {
return NULL;
};
$arguments112 = [];
$arguments112['identifier'] = NULL;
$arguments112['size'] = 'small';
$arguments112['overlay'] = NULL;
$arguments112['state'] = 'default';
$arguments112['alternativeMarkupIdentifier'] = NULL;
$arguments112['identifier'] = 'actions-window-open';
$arguments112['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);
};
$arguments110 = [];
$arguments110['value'] = NULL;
$arguments110['name'] = NULL;
$arguments110['name'] = 'icon';
$renderChildrenClosure111 = ($arguments110['value'] !== null) ? function() use ($arguments110) { return $arguments110['value']; } : $renderChildrenClosure111;
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output107 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
return NULL;
};
$arguments116 = [];
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['languageKey'] = NULL;
$arguments116['alternativeLanguageKeys'] = NULL;
$arguments116['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:deprecatedModuleLabel';
$arguments116['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
};
$arguments114 = [];
$arguments114['value'] = NULL;
$arguments114['name'] = NULL;
$arguments114['name'] = 'label';
$renderChildrenClosure115 = ($arguments114['value'] !== null) ? function() use ($arguments114) { return $arguments114['value']; } : $renderChildrenClosure115;
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output107 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent');
};
$arguments118 = [];
$arguments118['value'] = NULL;
$arguments118['name'] = NULL;
$arguments118['name'] = 'mainContent';
$renderChildrenClosure119 = ($arguments118['value'] !== null) ? function() use ($arguments118) { return $arguments118['value']; } : $renderChildrenClosure119;
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output107 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure121 = function() use ($renderingContext) {
return NULL;
};
$arguments120 = [];
$arguments120['section'] = NULL;
$arguments120['partial'] = NULL;
$arguments120['delegate'] = NULL;
$arguments120['renderable'] = NULL;
$arguments120['arguments'] = array (
);
$arguments120['optional'] = false;
$arguments120['default'] = NULL;
$arguments120['contentAs'] = NULL;
$arguments120['debug'] = true;
$arguments120['partial'] = 'Modules/Item';
$output122 = '';
// Rendering Array
$array123 = [];
$array123['uid'] = $renderingContext->getVariableProvider()->getByPath('uid');
$array123['icon'] = $renderingContext->getVariableProvider()->getByPath('icon');
$array123['label'] = $renderingContext->getVariableProvider()->getByPath('label');
$array123['mainContent'] = $renderingContext->getVariableProvider()->getByPath('mainContent');
$array123['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array123['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');

$output122 .= $array123;

$output122 .= '}';
$arguments120['arguments'] = $output122;
// Rendering Boolean node
// Rendering Array
$array124 = [];
$array124['0'] = 'false';

$expression125 = function($context) {return FALSE;};
$arguments120['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output107 .= '
    ';
return $output107;
};
$arguments103 = [];
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = [];
$array105['0'] = $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent');

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = $renderChildrenClosure104;

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output84 .= '

';
return $output84;
};
$arguments82 = [];
$arguments82['name'] = NULL;
$arguments82['name'] = 'Module';

$output79 .= '';

$output79 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
$output128 = '';

$output128 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return 'settings';
};
$arguments129 = [];
$arguments129['value'] = NULL;
$arguments129['name'] = NULL;
$arguments129['name'] = 'uid';
$renderChildrenClosure130 = ($arguments129['value'] !== null) ? function() use ($arguments129) { return $arguments129['value']; } : $renderChildrenClosure130;
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output128 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
return NULL;
};
$arguments133 = [];
$arguments133['identifier'] = NULL;
$arguments133['size'] = 'small';
$arguments133['overlay'] = NULL;
$arguments133['state'] = 'default';
$arguments133['alternativeMarkupIdentifier'] = NULL;
$arguments133['identifier'] = 'actions-system-extension-configure';
$arguments133['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
};
$arguments131 = [];
$arguments131['value'] = NULL;
$arguments131['name'] = NULL;
$arguments131['name'] = 'icon';
$renderChildrenClosure132 = ($arguments131['value'] !== null) ? function() use ($arguments131) { return $arguments131['value']; } : $renderChildrenClosure132;
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output128 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure136 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return NULL;
};
$arguments137 = [];
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label';
$arguments137['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);
};
$arguments135 = [];
$arguments135['value'] = NULL;
$arguments135['name'] = NULL;
$arguments135['name'] = 'label';
$renderChildrenClosure136 = ($arguments135['value'] !== null) ? function() use ($arguments135) { return $arguments135['value']; } : $renderChildrenClosure136;
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output128 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.shortInfo');
};
$arguments139 = [];
$arguments139['value'] = NULL;
$arguments139['name'] = NULL;
$arguments139['name'] = 'information';
$renderChildrenClosure140 = ($arguments139['value'] !== null) ? function() use ($arguments139) { return $arguments139['value']; } : $renderChildrenClosure140;
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output128 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
$output143 = '';

$output143 .= '
        <h1 class="typo3-adminPanel-headline">';
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
$arguments144['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label';
$arguments144['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= '</h1>
        <div class="typo3-adminPanel-card-group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure147 = function() use ($renderingContext) {
$output148 = '';

$output148 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure150 = function() use ($renderingContext) {
$output153 = '';

$output153 .= '
                    <div class="typo3-adminPanel-card">
                        <div class="typo3-adminPanel-card-header">
                            <h2 class="typo3-adminPanel-card-header-headline">
                                <span class="typo3-adminPanel-card-header-icon">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure155 = function() use ($renderingContext) {
return NULL;
};
$arguments154 = [];
$arguments154['identifier'] = NULL;
$arguments154['size'] = 'small';
$arguments154['overlay'] = NULL;
$arguments154['state'] = 'default';
$arguments154['alternativeMarkupIdentifier'] = NULL;
$arguments154['identifier'] = $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier');
$arguments154['alternativeMarkupIdentifier'] = 'inline';

$output153 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '</span>
                                <span class="typo3-adminPanel-card-header-text">';

$output153 .= $renderingContext->getVariableProvider()->getByPath('module.label');

$output153 .= '</span>
                            </h2>
                        </div>
                        <div class="typo3-adminPanel-card-body">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure157 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.pageSettings');
};
$arguments156 = [];
$arguments156['value'] = NULL;

$output153 .= isset($arguments156['value']) ? $arguments156['value'] : $renderChildrenClosure157();

$output153 .= '</div>
                    </div>
                ';
return $output153;
};
$arguments149 = [];
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array151 = [];
$array151['0'] = $renderingContext->getVariableProvider()->getByPath('module.pageSettings');

$expression152 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)
					),
					$renderingContext
				);
$arguments149['__thenClosure'] = $renderChildrenClosure150;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
            ';
return $output148;
};
$arguments146 = [];
$arguments146['each'] = NULL;
$arguments146['as'] = NULL;
$arguments146['key'] = NULL;
$arguments146['reverse'] = false;
$arguments146['iteration'] = NULL;
$arguments146['each'] = $renderingContext->getVariableProvider()->getByPath('settingsModules');
$arguments146['as'] = 'module';

$output143 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output143 .= '
        </div>
        <div class="typo3-adminPanel-form-group">
            <button data-typo3-role="typo3-adminPanel-saveButton" class="typo3-adminPanel-btn typo3-adminPanel-btn-primary">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext) {
return NULL;
};
$arguments158 = [];
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.updateButtonLabel';
$arguments158['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output143 .= '
            </button>
        </div>
    ';
return $output143;
};
$arguments141 = [];
$arguments141['value'] = NULL;
$arguments141['name'] = NULL;
$arguments141['name'] = 'mainContent';
$renderChildrenClosure142 = ($arguments141['value'] !== null) ? function() use ($arguments141) { return $arguments141['value']; } : $renderChildrenClosure142;
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output128 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure161 = function() use ($renderingContext) {
return NULL;
};
$arguments160 = [];
$arguments160['section'] = NULL;
$arguments160['partial'] = NULL;
$arguments160['delegate'] = NULL;
$arguments160['renderable'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['optional'] = false;
$arguments160['default'] = NULL;
$arguments160['contentAs'] = NULL;
$arguments160['debug'] = true;
$arguments160['partial'] = 'Modules/Item';
// Rendering Array
$array162 = [];
$array162['uid'] = $renderingContext->getVariableProvider()->getByPath('uid');
$array162['icon'] = $renderingContext->getVariableProvider()->getByPath('icon');
$array162['label'] = $renderingContext->getVariableProvider()->getByPath('label');
$array162['information'] = $renderingContext->getVariableProvider()->getByPath('information');
$array162['mainContent'] = $renderingContext->getVariableProvider()->getByPath('mainContent');
$array162['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array162['languageKey'] = $renderingContext->getVariableProvider()->getByPath('languageKey');
$arguments160['arguments'] = $array162;
// Rendering Boolean node
// Rendering Array
$array163 = [];
$array163['0'] = 'false';

$expression164 = function($context) {return FALSE;};
$arguments160['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output128 .= '
';
return $output128;
};
$arguments126 = [];
$arguments126['name'] = NULL;
$arguments126['name'] = 'Settings';

$output79 .= '';

$output79 .= '

';

return $output79;
}


}
#