-- oc_stock_status
UPDATE oc_stock_status SET name = 'Em Estoque' WHERE name = 'In Stock' and language_id = 2;
UPDATE oc_stock_status SET name = 'Orçamento' WHERE name = 'Pre-Order'  and language_id = 2;
UPDATE oc_stock_status SET name = 'Esgotado' WHERE name = 'Out Of Stock'  and language_id = 2;
UPDATE oc_stock_status SET name = '2 a 3 Dias' WHERE name = '2-3 Days'  and language_id = 2;

-- oc_order_status
UPDATE oc_order_status SET name = 'Processando' WHERE name = 'Processing' and language_id = 2;
UPDATE oc_order_status SET name = 'Enviado' WHERE name = 'Shipped' and language_id = 2;
UPDATE oc_order_status SET name = 'Cancelado' WHERE name = 'Canceled' and language_id = 2;
UPDATE oc_order_status SET name = 'Completo' WHERE name = 'Complete' and language_id = 2;
UPDATE oc_order_status SET name = 'Negado' WHERE name = 'Denied' and language_id = 2;
UPDATE oc_order_status SET name = 'Cancelamento Revertido' WHERE name = 'Canceled Reversal' and language_id = 2;
UPDATE oc_order_status SET name = 'Não Aprovado' WHERE name = 'Failed' and language_id = 2;
UPDATE oc_order_status SET name = 'Reembolsado' WHERE name = 'Refunded' and language_id = 2;
UPDATE oc_order_status SET name = 'Estornado' WHERE name = 'Reversed' and language_id = 2;
UPDATE oc_order_status SET name = 'Cancelado pela Operadora' WHERE name = 'Chargeback' and language_id = 2;
UPDATE oc_order_status SET name = 'Aguardando Pagamento' WHERE name = 'Pending' and language_id = 2;
UPDATE oc_order_status SET name = 'Anulado' WHERE name = 'Voided' and language_id = 2;
UPDATE oc_order_status SET name = 'Processado' WHERE name = 'Processed' and language_id = 2;
UPDATE oc_order_status SET name = 'Expirado' WHERE name = 'Expired' and language_id = 2;
UPDATE oc_order_status SET name = 'Negado' WHERE name = 'Denied' and language_id = 2;
UPDATE oc_order_status SET name = 'Entregue' WHERE name = 'Delivered' and language_id = 2;
UPDATE oc_order_status SET name = 'Enviado' WHERE name = 'Sent' and language_id = 2;

-- oc_return_status
UPDATE oc_return_status SET name = 'Pendente' WHERE name = 'Pending' and language_id = 2;
UPDATE oc_return_status SET name = 'Completa' WHERE name = 'Complete' and language_id = 2;
UPDATE oc_return_status SET name = 'Aguardando Produtos' WHERE name = 'Awaiting Products' and language_id = 2;

-- oc_return_action
UPDATE oc_return_action SET name = 'Crédito Emitido' WHERE name = 'Credit Issued' and language_id = 2;
UPDATE oc_return_action SET name = 'Reembolsado' WHERE name = 'Refunded' and language_id = 2;
UPDATE oc_return_action SET name = 'Envio de Substituição' WHERE name = 'Replacement Sent' and language_id = 2;

-- oc_return_reason
UPDATE oc_return_reason SET name = 'Chegou quebrado' WHERE name = 'Dead On Arrival' and language_id = 2;
UPDATE oc_return_reason SET name = 'Defeito, forneça detalhes' WHERE name = 'Faulty, please supply details' and language_id = 2;
UPDATE oc_return_reason SET name = 'Erro no pedido' WHERE name = 'Order Error' and language_id = 2;
UPDATE oc_return_reason SET name = 'Outros, forneça detalhes' WHERE name = 'Other, please supply details' and language_id = 2;
UPDATE oc_return_reason SET name = 'Produto trocado' WHERE name = 'Received Wrong Item' and language_id = 2;

-- oc_length_class_description
UPDATE oc_length_class_description SET title = 'Centímetro' WHERE title = 'Centimeter' and language_id = 2;
UPDATE oc_length_class_description SET title = 'Milímetro' WHERE title = 'Millimeter' and language_id = 2;
UPDATE oc_length_class_description SET title = 'Polegada' WHERE title = 'Inch' and language_id = 2;

-- oc_weight_class_description
UPDATE oc_weight_class_description SET title = 'Quilograma' WHERE title = 'Kilogram' and language_id = 2 and language_id = 2;
UPDATE oc_weight_class_description SET title = 'Grama' WHERE title = 'Gram' and language_id = 2 and language_id = 2;
UPDATE oc_weight_class_description SET title = 'Libra' WHERE title = 'Pound' and language_id = 2 and language_id = 2;
UPDATE oc_weight_class_description SET title = 'Onça' WHERE title = 'Ounce' and language_id = 2 and language_id = 2;

-- oc_voucher_theme_description
UPDATE oc_voucher_theme_description SET name = 'Aniversário' WHERE name = 'Birthday' and language_id = 2;
UPDATE oc_voucher_theme_description SET name = 'Natal' WHERE name = 'Christmas' and language_id = 2;
UPDATE oc_voucher_theme_description SET name = 'Geral' WHERE name = 'General' and language_id = 2;

-- oc_layout
UPDATE oc_layout SET name = 'Conta' WHERE name = 'Account';
UPDATE oc_layout SET name = 'Afiliados' WHERE name = 'Affiliate';
UPDATE oc_layout SET name = 'Departamentos' WHERE name = 'Category';
UPDATE oc_layout SET name = 'Finalizar pedido' WHERE name = 'Checkout';
UPDATE oc_layout SET name = 'Comparar produtos' WHERE name = 'Compare';
UPDATE oc_layout SET name = 'Contate-nos' WHERE name = 'Contact';
UPDATE oc_layout SET name = 'Padrão' WHERE name = 'Default';
UPDATE oc_layout SET name = 'Principal' WHERE name = 'Home';
UPDATE oc_layout SET name = 'Páginas de informações' WHERE name = 'Information';
UPDATE oc_layout SET name = 'Marcas' WHERE name = 'Manufacturer';
UPDATE oc_layout SET name = 'Produtos' WHERE name = 'Product';
UPDATE oc_layout SET name = 'Pesquisa de produtos' WHERE name = 'Search';
UPDATE oc_layout SET name = 'Mapa do Site' WHERE name = 'Sitemap';

-- oc_user_group
UPDATE oc_user_group SET name = 'Administrador' WHERE name = 'Administrator';
UPDATE oc_user_group SET name = 'Demonstração' WHERE name = 'Demonstration';

-- oc_information_description
UPDATE oc_information_description SET title = 'Sobre nós', meta_title = 'Sobre nós', description = '&lt;p&gt;Sobre nós&lt;/p&gt;' WHERE title = 'About Us' and language_id = 2;
UPDATE oc_information_description SET title = 'Termos &amp; Condições', meta_title = 'Termos &amp; Condições', description = '&lt;p&gt;Termos &amp;amp; Condições&lt;/p&gt;' WHERE title = 'Terms &amp; Conditions' and language_id = 2;
UPDATE oc_information_description SET title = 'Política de privacidade', meta_title = 'Política de privacidade', description = '&lt;p&gt;Política de privacidade&lt;/p&gt;' WHERE title = 'Privacy Policy' and language_id = 2;
UPDATE oc_information_description SET title = 'Informações de envio', meta_title = 'Informações de envio', description = '&lt;p&gt;Informações de envio&lt;/p&gt;' WHERE title = 'Delivery Information' and language_id = 2;

-- oc_setting
UPDATE oc_setting SET value = 'Minha loja' WHERE value = 'My Store';
UPDATE oc_setting SET value = 'Sua loja' WHERE value = 'Your Store';
