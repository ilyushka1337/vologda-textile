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
    class ContentV2GetCardsListPostBodySettingsFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('withPhoto', $data)) {
                $object->setWithPhoto($data['withPhoto']);
                unset($data['withPhoto']);
            }
            if (\array_key_exists('textSearch', $data)) {
                $object->setTextSearch($data['textSearch']);
                unset($data['textSearch']);
            }
            if (\array_key_exists('tagIDs', $data)) {
                $values = [];
                foreach ($data['tagIDs'] as $value) {
                    $values[] = $value;
                }
                $object->setTagIDs($values);
                unset($data['tagIDs']);
            }
            if (\array_key_exists('allowedCategoriesOnly', $data)) {
                $object->setAllowedCategoriesOnly($data['allowedCategoriesOnly']);
                unset($data['allowedCategoriesOnly']);
            }
            if (\array_key_exists('objectIDs', $data)) {
                $values_1 = [];
                foreach ($data['objectIDs'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setObjectIDs($values_1);
                unset($data['objectIDs']);
            }
            if (\array_key_exists('brands', $data)) {
                $values_2 = [];
                foreach ($data['brands'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setBrands($values_2);
                unset($data['brands']);
            }
            if (\array_key_exists('imtID', $data)) {
                $object->setImtID($data['imtID']);
                unset($data['imtID']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('withPhoto') && null !== $object->getWithPhoto()) {
                $data['withPhoto'] = $object->getWithPhoto();
            }
            if ($object->isInitialized('textSearch') && null !== $object->getTextSearch()) {
                $data['textSearch'] = $object->getTextSearch();
            }
            if ($object->isInitialized('tagIDs') && null !== $object->getTagIDs()) {
                $values = [];
                foreach ($object->getTagIDs() as $value) {
                    $values[] = $value;
                }
                $data['tagIDs'] = $values;
            }
            if ($object->isInitialized('allowedCategoriesOnly') && null !== $object->getAllowedCategoriesOnly()) {
                $data['allowedCategoriesOnly'] = $object->getAllowedCategoriesOnly();
            }
            if ($object->isInitialized('objectIDs') && null !== $object->getObjectIDs()) {
                $values_1 = [];
                foreach ($object->getObjectIDs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['objectIDs'] = $values_1;
            }
            if ($object->isInitialized('brands') && null !== $object->getBrands()) {
                $values_2 = [];
                foreach ($object->getBrands() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['brands'] = $values_2;
            }
            if ($object->isInitialized('imtID') && null !== $object->getImtID()) {
                $data['imtID'] = $object->getImtID();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class => false];
        }
    }
} else {
    class ContentV2GetCardsListPostBodySettingsFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class;
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
            $object = new \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('withPhoto', $data)) {
                $object->setWithPhoto($data['withPhoto']);
                unset($data['withPhoto']);
            }
            if (\array_key_exists('textSearch', $data)) {
                $object->setTextSearch($data['textSearch']);
                unset($data['textSearch']);
            }
            if (\array_key_exists('tagIDs', $data)) {
                $values = [];
                foreach ($data['tagIDs'] as $value) {
                    $values[] = $value;
                }
                $object->setTagIDs($values);
                unset($data['tagIDs']);
            }
            if (\array_key_exists('allowedCategoriesOnly', $data)) {
                $object->setAllowedCategoriesOnly($data['allowedCategoriesOnly']);
                unset($data['allowedCategoriesOnly']);
            }
            if (\array_key_exists('objectIDs', $data)) {
                $values_1 = [];
                foreach ($data['objectIDs'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setObjectIDs($values_1);
                unset($data['objectIDs']);
            }
            if (\array_key_exists('brands', $data)) {
                $values_2 = [];
                foreach ($data['brands'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setBrands($values_2);
                unset($data['brands']);
            }
            if (\array_key_exists('imtID', $data)) {
                $object->setImtID($data['imtID']);
                unset($data['imtID']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('withPhoto') && null !== $object->getWithPhoto()) {
                $data['withPhoto'] = $object->getWithPhoto();
            }
            if ($object->isInitialized('textSearch') && null !== $object->getTextSearch()) {
                $data['textSearch'] = $object->getTextSearch();
            }
            if ($object->isInitialized('tagIDs') && null !== $object->getTagIDs()) {
                $values = [];
                foreach ($object->getTagIDs() as $value) {
                    $values[] = $value;
                }
                $data['tagIDs'] = $values;
            }
            if ($object->isInitialized('allowedCategoriesOnly') && null !== $object->getAllowedCategoriesOnly()) {
                $data['allowedCategoriesOnly'] = $object->getAllowedCategoriesOnly();
            }
            if ($object->isInitialized('objectIDs') && null !== $object->getObjectIDs()) {
                $values_1 = [];
                foreach ($object->getObjectIDs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['objectIDs'] = $values_1;
            }
            if ($object->isInitialized('brands') && null !== $object->getBrands()) {
                $values_2 = [];
                foreach ($object->getBrands() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['brands'] = $values_2;
            }
            if ($object->isInitialized('imtID') && null !== $object->getImtID()) {
                $data['imtID'] = $object->getImtID();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class => false];
        }
    }
}