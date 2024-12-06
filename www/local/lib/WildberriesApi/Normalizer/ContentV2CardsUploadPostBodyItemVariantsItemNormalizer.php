<?php

namespace Placestart\WildberriesApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Placestart\WildberriesApi\Runtime\Normalizer\CheckArray;
use Placestart\WildberriesApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ContentV2CardsUploadPostBodyItemVariantsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand', $data)) {
                $object->setBrand($data['brand']);
                unset($data['brand']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('sizes', $data)) {
                $values = [];
                foreach ($data['sizes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class, 'json', $context);
                }
                $object->setSizes($values);
                unset($data['sizes']);
            }
            if (\array_key_exists('characteristics', $data)) {
                $values_1 = [];
                foreach ($data['characteristics'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem::class, 'json', $context);
                }
                $object->setCharacteristics($values_1);
                unset($data['characteristics']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['vendorCode'] = $object->getVendorCode();
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('sizes') && null !== $object->getSizes()) {
                $values = [];
                foreach ($object->getSizes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sizes'] = $values;
            }
            if ($object->isInitialized('characteristics') && null !== $object->getCharacteristics()) {
                $values_1 = [];
                foreach ($object->getCharacteristics() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['characteristics'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class => false];
        }
    }
} else {
    class ContentV2CardsUploadPostBodyItemVariantsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand', $data)) {
                $object->setBrand($data['brand']);
                unset($data['brand']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('sizes', $data)) {
                $values = [];
                foreach ($data['sizes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class, 'json', $context);
                }
                $object->setSizes($values);
                unset($data['sizes']);
            }
            if (\array_key_exists('characteristics', $data)) {
                $values_1 = [];
                foreach ($data['characteristics'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem::class, 'json', $context);
                }
                $object->setCharacteristics($values_1);
                unset($data['characteristics']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['vendorCode'] = $object->getVendorCode();
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('sizes') && null !== $object->getSizes()) {
                $values = [];
                foreach ($object->getSizes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sizes'] = $values;
            }
            if ($object->isInitialized('characteristics') && null !== $object->getCharacteristics()) {
                $values_1 = [];
                foreach ($object->getCharacteristics() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['characteristics'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class => false];
        }
    }
}