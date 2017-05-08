<input name="ilab-media-tool-enabled-{{$name}}" type="checkbox" value="1" {{($tool->enabled()) ? 'checked' : ''}}> {{$tool->toolInfo['description']}}
{% if (count($tool->toolInfo['dependencies'])>0) %}
<p style="font-size:12px; margin-top:15px;">
    <strong>Requires:</strong>
<?php
        $required=[];
        foreach($tool->toolInfo['dependencies'] as $dep) {
            if (is_array($dep)) {
                $depTitles = [];
                foreach($dep as $toolDep){
                    $depTitles[] = $manager->tools[$toolDep]->toolInfo['title'];
                }

                $required[] = implode(' and/or ', $depTitles);
            } else {
	            $required[]=$manager->tools[$dep]->toolInfo['title'];
            }
        }
        $required=implode(', ',$required);
?>
    {{$required}}
</p>
{% endif %}