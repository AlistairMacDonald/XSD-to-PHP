<?php
namespace oasis\names\specification\ubl\schema\xsd\CommonAggregateComponents_2;

/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2
 * @xmlType 
 * @xmlName OrderLineReferenceType
 * @xmlComponentType ABIE
 * @xmlDictionaryEntryName Order Line Reference. Details
 * @xmlDefinition Information about an Order Line Reference.
 * @xmlObjectClass Order Line Reference
 */
class OrderLineReferenceType
	{

	
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Order Line Reference. Line Identifier. Identifier
	 * @Definition Identifies the referenced Order Line assigned by the buyer.
	 * @Cardinality 1
	 * @ObjectClass Order Line Reference
	 * @PropertyTerm Line Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 1
	 * @xmlMaxOccurs 1
	 * @xmlName LineID
	 * @var LineID
	 */
	public $LineID;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Order Line Reference. Sales Order_ Line Identifier. Identifier
	 * @Definition Identifies the referenced Order Line assigned by the seller.
	 * @Cardinality 0..1
	 * @ObjectClass Order Line Reference
	 * @PropertyTermQualifier Sales Order
	 * @PropertyTerm Line Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName SalesOrderLineID
	 * @var SalesOrderLineID
	 */
	public $SalesOrderLineID;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Order Line Reference. UUID. Identifier
	 * @Definition A universally unique identifier for an instance of this ABIE.
	 * @Cardinality 0..1
	 * @ObjectClass Order Line Reference
	 * @PropertyTerm UUID
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName UUID
	 * @var UUID
	 */
	public $UUID;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Order Line Reference. Line Status Code. Code
	 * @Definition Identifies the status of the referenced Order Line with respect to its original state.
	 * @Cardinality 0..1
	 * @ObjectClass Order Line Reference
	 * @PropertyTerm Line Status Code
	 * @RepresentationTerm Code
	 * @DataType Line Status_ Code. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName LineStatusCode
	 * @var LineStatusCode
	 */
	public $LineStatusCode;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Order Line Reference. Order Reference
	 * @Definition An association to Order Reference.
	 * @Cardinality 0..1
	 * @ObjectClass Order Line Reference
	 * @PropertyTerm Order Reference
	 * @AssociatedObjectClass Order Reference
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName OrderReference
	 * @var OrderReference
	 */
	public $OrderReference;


} // end class OrderLineReferenceType