# Magento_Selection
Récupère une seléction de produits selon un attribut

Exemple d'intégration du bloc (sur une page CMS en back-office, ou dans un layout XML) - le bloc affichera 4 produits ayant l'attribut (booléen) is_top_promo à "oui" :
<block type="selection/list" name="top_promos" template="selection/top_promos.phtml">
    <action method="setData">
      <name>attribut</name><value>is_top_promo</value>
    </action>
    <action method="setData">
      <name>limit</name><value>4</value>
    </action>
</block>
