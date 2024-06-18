-----------------------------------------
vQmod?- Virtual File Modification System
See website for additional information, install, usage, and syntax:
https://vqmod.com
==========================================================

大米cms改进型vQmod V2.6.9 基于vqmod2.6.8
https://www.damicms.com

(1)增加覆写文件内容替换:xml示例：

<file name="vendor/topthink/framework/src/think/route/Url.php" info="解决tp6兼容nginx不支持pathinfo生成url的bug">
        <operation>
            <overwrite>vqmod/overwrite/Url.php</overwrite>
		</operation>
</file>
(2)vqmod是基于行搜索替换，改进增加整个文件内容搜索替换 支持正则 xml示例：

<file name="vendor/topthink/framework/src/think/route/Url.php" info="解决tp6兼容nginx不支持pathinfo生成url的bug">
	<operation>
		<overwrite>vqmod/overwrite/Url.php</overwrite>
		<search position="replace" regex="true" global_search="true"><![CDATA[/public\s+function\s+build\(\)\s*:\s*string(\W)+\{([\s\S]*)__toString/i]]></search>
		<add><![CDATA[转义后的替换字符串]]></add>
	</operation>
</file>

大米cms7.x使用vqmod方法：
（1）composer install或update
（2）php ./vqmod/install/index.php

注意：vqmod/vqmod_runtime linux可能需要读写权限
		