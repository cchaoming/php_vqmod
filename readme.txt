-----------------------------------------
vQmod?- Virtual File Modification System
See website for additional information, install, usage, and syntax:
https://vqmod.com
==========================================================

����cms�Ľ���vQmod V2.6.9 ����vqmod2.6.8
https://www.damicms.com

(1)���Ӹ�д�ļ������滻:xmlʾ����

<file name="vendor/topthink/framework/src/think/route/Url.php" info="���tp6����nginx��֧��pathinfo����url��bug">
        <operation>
            <overwrite>vqmod/overwrite/Url.php</overwrite>
		</operation>
</file>
(2)vqmod�ǻ����������滻���Ľ����������ļ����������滻 ֧������ xmlʾ����

<file name="vendor/topthink/framework/src/think/route/Url.php" info="���tp6����nginx��֧��pathinfo����url��bug">
	<operation>
		<overwrite>vqmod/overwrite/Url.php</overwrite>
		<search position="replace" regex="true" global_search="true"><![CDATA[/public\s+function\s+build\(\)\s*:\s*string(\W)+\{([\s\S]*)__toString/i]]></search>
		<add><![CDATA[ת�����滻�ַ���]]></add>
	</operation>
</file>

����cms7.xʹ��vqmod������
��1��composer install��update
��2��php ./vqmod/install/index.php

ע�⣺vqmod/vqmod_runtime linux������Ҫ��дȨ��
		